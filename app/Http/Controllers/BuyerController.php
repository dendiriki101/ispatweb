<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Lelang;
use App\Models\Pelelang;
use Illuminate\Http\Request;
use App\Mail\NotifyAuction;
use App\Mail\NewAuctionNotification;
use Illuminate\Support\Facades\Mail;

class BuyerController extends Controller
{
    public function index($lelangId)
    {
        // Mengambil data lelang berdasarkan ID
        $lelang = Lelang::findOrFail($lelangId);

        // Menampilkan form dengan data lelang yang relevan
        return view('layout.lelang.submit', [
            'url' => 'booking',
            'class' => 'sub_page',
            'navbar' => 'timpanav',
            'sub' => 'EN',
            'lelang' => $lelang
        ]);
    }


    public function store(Request $request, Lelang $lelang)
    {
        // Preprocess penawaran to remove any commas or dots
        $penawaran = preg_replace('/[^\d]/', '', $request->penawaran);

        // Validasi input
        $request->merge(['penawaran' => $penawaran]);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'penawaran' => 'required|integer',
            'bank' => 'required|string',
            'no_rek' => 'required|string',
            'atas_nama' => 'required|string',
        ]);

        // Tambahan validasi untuk limbah
        if ($lelang->limbah === 'yes') {
            $request->validate([
                'npwp' => 'required|string|size:20',
            ]);
        }

        // Cek apakah buyer sudah ada berdasarkan email atau NPWP
        $buyer = Buyer::where('email', $request->email)
            ->orWhere('npwp', $request->npwp)
            ->first();

        if (!$buyer) {
            // Jika tidak ada buyer, buat buyer baru
            $buyer = Buyer::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nomor_telepon' => $request->nomor_telepon,
                'npwp' => $request->npwp,
                'email' => $request->email,
                'bank' => $request->bank,
                'no_rek' => $request->no_rek,
                'atas_nama' => $request->atas_nama,
                'status' => 'active',
            ]);

            $type = 'new buyer';
        } else {
            $type = 'normal buyer';
        }

        // Simpan data pelelang ke tabel pelelang
        $pelelang = Pelelang::create([
            'no_lelang' => $lelang->id,
            'id_buyer' => $buyer->id,
            'penawaran' => $penawaran,
            'status' => 'active',
            'type' => $type,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $recipients = [
            '18410100087@dinamika.ac.id',
            'beny.dwi@mittalsteel.com',
            'dendi.riki@mittalsteel.com',
            'dendirikirahmawan@gmail.com'
        ];

        // Kirim email notifikasi lelang ke daftar penerima
        Mail::to($recipients)->send(new NotifyAuction($lelang, $pelelang, $buyer));

        // Kirim email notifikasi ke alamat email buyer yang baru dibuat jika email tidak kosong
        if (!empty($buyer->email)) {
            Mail::to($buyer->email)->send(new NewAuctionNotification($lelang, $pelelang, $buyer));
        }

        return redirect()->route('lelangdetail', ['lelang' => $lelang->id])
            ->with('success', 'Pendaftaran lelang berhasil disimpan dan email notifikasi telah dikirim!');
    }



    public function show($id)
    {
        $buyer = Buyer::findOrFail($id);
        return response()->json($buyer);
    }

    public function update(Request $request, $id)
    {
        $buyer = Buyer::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:20|unique:buyers,npwp,' . $buyer->id, // Validasi NPWP untuk update
            'nomor_telepon' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255|unique:buyers,email,' . $buyer->id, // Validasi email untuk update
            'status' => 'nullable|string|max:10',
        ]);

        $buyer->update($validatedData);
        return response()->json($buyer);
    }

    public function destroy($id)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->delete();
        return response()->json(null, 204);
    }
}

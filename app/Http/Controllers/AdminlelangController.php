<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Email;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Menggunakan Auth untuk otentikasi pengguna
use App\Mail\Notifcustomer;
use Illuminate\Support\Facades\Mail;

class AdminlelangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         Return view('admin.layout.lelang.index',[
            'title' => 'Management Lelang',
            'lelangs' => Lelang::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.lelang.create',[
            'title' => 'Management Lelang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $rules=[
            'title' => ['required'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => ['required']
            ];

        $this->validate($request,$rules);

        $content = $request->content;

        $dom = new DOMDocument();
        @$dom->loadHTML($content,9);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $key => $img){
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/uplade/" . time(). $key. '.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
            $existingClass = $img->getAttribute('class');
            $img->setAttribute('class', $existingClass . ' img-fluid');
        }

        $content = $dom->saveHTML();

        // Menyimpan gambar
        $picture_name = null; // Initialize variable untuk nama file gambar
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture_name = time() . '_' . $file->getClientOriginalName();
            $tujuanUpload = 'file/lelang'; // Path untuk menyimpan gambar
            $file->move(public_path($tujuanUpload), $picture_name); // Simpan gambar

            // Sekarang $picture_name berisi nama file yang benar
        }

        $lelang = Lelang::create([
            'title' => $request->title,
            'picture' => $tujuanUpload . '/' . $picture_name, // Simpan path yang benar ke database
            'content' => $content,
            'status' => 'open',
            'uom' => $request->uom,
            'limbah' => $request->limbah,
            'links' => 'default', // Awal nilai default untuk sementara
            'description' => 'default',
            'buyer' => 'not sold yet',
            'created_by' => auth()->user()->name,
        ]);

        // Update field 'links' dengan URL dinamis berdasarkan id dari lelang yang baru saja dibuat
        $lelang->links = url('/lelangdetail/' . $lelang->id);
        $lelang->save();


         // Ambil semua alamat email dari tabel
        $recipients = Email::pluck('email')->toArray();
        Mail::to($recipients)->send(new Notifcustomer($lelang));

     return redirect('/admin/lelang')->with('success', 'Gambar berhasil diunggah');

    }

    /**
     * Display the specified resource.
     */
    public function show(Lelang $lelang)
    {
        return view('admin.layout.lelang.show', [
            'title' => 'Detail Lelang',
            'lelang' => $lelang,
        ]);
    }

    public function edit(Lelang $lelang)
    {
        return view('admin.layout.lelang.edit', [
            'title' => 'Edit Lelang',
            'lelang' => $lelang,
        ]);
    }

    public function update(Request $request, Lelang $lelang)
    {
        $rules = [
            'title' => ['required'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => ['required']
        ];

        $this->validate($request, $rules);

        $content = $request->content;
        $dom = new DOMDocument();
        @$dom->loadHTML($content, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/uplade/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
            $existingClass = $img->getAttribute('class');
            $img->setAttribute('class', $existingClass . ' img-fluid');
        }

        $content = $dom->saveHTML();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture_name = time() . '_' . $file->getClientOriginalName();
            $tujuanUpload = 'file/lelang';
            $file->move(public_path($tujuanUpload), $picture_name);
            $lelang->picture = $tujuanUpload . '/' . $picture_name;
        }

        $lelang->title = $request->title;
        $lelang->content = $content;
        $lelang->uom = $request->uom;
        $lelang->save();

        return redirect('/admin/lelang')->with('success', 'Data lelang berhasil diperbarui');
    }

    public function destroy(Lelang $lelang)
    {
        // Menghapus gambar jika ada
        if (file_exists(public_path($lelang->picture))) {
            unlink(public_path($lelang->picture));
        }

        $lelang->delete();
        return redirect('/admin/lelang')->with('success', 'Data lelang berhasil dihapus');
    }

}

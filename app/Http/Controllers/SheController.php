<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheController extends Controller
{
    public function index()
{
    // Ambil data dari file teks
    $data = file_get_contents(public_path('assets/she.txt'));
    $sheData = json_decode($data, true); // Ubah data dari JSON ke array

    // Ubah array menjadi string sebelum mengirimkannya ke tampilan
    $sheDataString = implode(', ', $sheData);

    return view('admin.layout.she.she', [
        'sheData' => $sheData, // Kirim data ke tampilan
    ]);
}



    public function nearMiss()
    {
        return view('admin.layout.she.nearmiss',[

        ]);
    }

    public function firstAID()
    {
        return view('admin.layout.she.firstaidcases',[

        ]);
    }

    public function medicalTreatment()
    {
        return view('admin.layout.she.medicaltreatmentcases',[

        ]);
    }

    public function lostWorkdays()
    {
        return view('admin.layout.she.lostworkdays',[]);
    }

    public function fatalityCases()
    {
        return view('admin.layout.she.fatalitycases',[]);
    }

    public function updateNearMiss(Request $request)
    {
        // Validasi data yang diterima jika diperlukan
        $validatedData = $request->validate([
            'near_miss' => 'required',
        ]);

        // Simpan data yang diperbarui ke variabel data
        $data['NearMiss'] = $validatedData['near_miss'];

        // Simpan data ke dalam file teks di direktori public/assets
        $data = json_encode($data); // Ubah data menjadi format JSON atau sesuaikan format yang Anda butuhkan
        file_put_contents(public_path('assets/she.txt'), $data);

        // Kembali ke halaman sebelumnya atau tampilkan konfirmasi pembaruan
        return redirect('admin/she')->with('success', 'Data Near Miss berhasil diperbarui');
    }

    public function updateFirstAID(Request $request)
    {
        // Validasi data yang diterima jika diperlukan
        $validatedData = $request->validate([
            'firstaid' => 'required',
        ]);

        // Baca data yang ada dari file teks
        $fileData = json_decode(file_get_contents(public_path('assets/she.txt')), true);

        // Simpan data yang diperbarui ke variabel data
        $fileData['FirstAIDCases'] = $validatedData['firstaid'];

        // Simpan data ke dalam file teks di direktori public/assets
        $updatedData = json_encode($fileData); // Ubah data menjadi format JSON atau sesuaikan format yang Anda butuhkan
        file_put_contents(public_path('assets/she.txt'), $updatedData);

        // Kembali ke halaman sebelumnya atau tampilkan konfirmasi pembaruan
        return redirect('admin/she')->with('success', 'Data FirstAIDCases berhasil diperbarui');
    }

    public function updateMedicalTreatment(Request $request)
{
    // Validasi data yang diterima jika diperlukan
    $validatedData = $request->validate([
        'medicaltreatment' => 'required',
    ]);

    // Baca data yang ada dari file teks
    $fileData = json_decode(file_get_contents(public_path('assets/she.txt')), true);

    // Simpan data yang diperbarui ke variabel data
    $fileData['MedicalTreatmentCases'] = $validatedData['medicaltreatment'];

    // Simpan data ke dalam file teks di direktori public/assets
    $updatedData = json_encode($fileData); // Ubah data menjadi format JSON atau sesuaikan format yang Anda butuhkan
    file_put_contents(public_path('assets/she.txt'), $updatedData);

    // Kembali ke halaman sebelumnya atau tampilkan konfirmasi pembaruan
    return redirect('admin/she')->with('success', 'Data Medical Treatment Cases berhasil diperbarui');
}

public function updateLostWorkdays(Request $request)
{
    // Validasi data yang diterima jika diperlukan
    $validatedData = $request->validate([
        'lostworkdays' => 'required',
    ]);

    // Baca data yang ada dari file teks
    $fileData = json_decode(file_get_contents(public_path('assets/she.txt')), true);

    // Simpan data yang diperbarui ke variabel data
    $fileData['LostWorkdays'] = $validatedData['lostworkdays'];

    // Simpan data ke dalam file teks di direktori public/assets
    $updatedData = json_encode($fileData); // Ubah data menjadi format JSON atau sesuaikan format yang Anda butuhkan
    file_put_contents(public_path('assets/she.txt'), $updatedData);

    // Kembali ke halaman sebelumnya atau tampilkan konfirmasi pembaruan
    return redirect('admin/she')->with('success', 'Data Lost Workdays berhasil diperbarui');
}

public function updateFatalityCases(Request $request)
{
    // Validasi data yang diterima jika diperlukan
    $validatedData = $request->validate([
        'fatalitycases' => 'required',
    ]);

    // Baca data yang ada dari file teks
    $fileData = json_decode(file_get_contents(public_path('assets/she.txt')), true);

    // Simpan data yang diperbarui ke variabel data
    $fileData['FatalityCases'] = $validatedData['fatalitycases'];

    // Simpan data ke dalam file teks di direktori public/assets
    $updatedData = json_encode($fileData); // Ubah data menjadi format JSON atau sesuaikan format yang Anda butuhkan
    file_put_contents(public_path('assets/she.txt'), $updatedData);

    // Kembali ke halaman sebelumnya atau tampilkan konfirmasi pembaruan
    return redirect('admin/she')->with('success', 'Data Fatality Cases berhasil diperbarui');
}







}

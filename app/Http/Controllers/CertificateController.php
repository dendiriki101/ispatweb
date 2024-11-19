<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Return view('admin.layout.certificates.certificates',[
            'title' => 'My Post In Certificates',
            'certificates' => Certificate::latest()->paginate(7),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('admin.layout.certificates.certificatescreate',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'file' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10000', // Maksimal 10MB (10,000 kilobita)
            'type' => ['required'],

        ]);

        $validatedData['file'] = $request->file('file')->store('certificate');

        Certificate::create($validatedData);
        return redirect('/admin/certificate')->with('success','New Post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        if ($certificate->file){
            Storage::delete($certificate->file);
        }
        Certificate::destroy($certificate->id);
        return redirect('/admin/certificate')->with('success','deleted certificate');
    }
}

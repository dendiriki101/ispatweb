<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user(); // Mengambil pengguna saat ini

        Return view('admin.layout.career.index',[
            'title' => 'My Post In News',
            'user' => $user->name,
            'careers' => Career::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.layout.career.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $validatedData = $request->validate([
                'name' => ['required','max:255'],
                'salary' => ['required'],
                'description' => ['required'],
                'runninghour' => ['required'],
                'tertiaryeducation' => ['required'],
                'status' => ['required']
            ]);

            Career::create($validatedData);
            return redirect('/admin/careers')->with('success','New Job has been created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        return View ('admin.layout.career.show',[
            'career' => $career
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        return View('admin.layout.career.edit',[
            'career' => $career
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
         $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'salary' => ['required'],
            'description' => ['required'],
            'runninghour' => ['required'],
            'tertiaryeducation' => ['required'],
            'status' => ['required']
        ]);

        Career::where('id',$career->id)->update($validatedData);
        return redirect('/admin/careers')->with('success','Job has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        Career::destroy($career->id);
        return redirect('/admin/careers')->with('success',' Post has been deleted');
    }
}

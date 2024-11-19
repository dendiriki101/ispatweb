<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); // Mengambil pengguna saat ini

        Return view('admin.layout.number.index',[
            'title' => 'My Post In News',
            'user' => $user->name,
            'number' => Number::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.layout.number.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'company' => ['required'],
            'number' => ['max:255'],
            'email' => ['max:255'],
        ]);

        Number::create($validatedData);
        return redirect('/admin/number')->with('success','New Post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Number $number)
    {
        return View ('admin.layout.number.show',[
            'number' => $number
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Number $number)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Number $number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Number $number)
    {
        Number::destroy($number->id);
        return redirect('/admin/number')->with('success',' Post has been deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $emails = Email::paginate(10);
        return view('admin.layout.email.index', compact('emails'));
    }

    public function create()
    {
        return view('admin.layout.email.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:emails',
            'no_hp' => 'required|string|max:15',
            'no_npwp' => 'required|string|max:20',
            'status' => 'required|in:active,inactive',
            'type' => 'required|string|max:255',
        ]);

        Email::create($request->all());
        return redirect()->route('email.index')->with('success', 'Data email berhasil ditambahkan.');
    }

    public function show(Email $email)
    {
        return view('admin.layout.email.show', compact('email'));
    }

    public function edit(Email $email)
    {
        return view('admin.email.edit', compact('email'));
    }

    public function update(Request $request, Email $email)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:emails,email,' . $email->id,
            'no_hp' => 'required|string|max:15',
            'no_npwp' => 'required|string|max:20',
            'status' => 'required|in:active,inactive',
            'type' => 'required|string|max:255',
        ]);

        $email->update($request->all());
        return redirect()->route('email.index')->with('success', 'Data email berhasil diperbarui.');
    }

    public function destroy(Email $email)
    {
        $email->delete();
        return redirect()->route('email.index')->with('success', 'Data email berhasil dihapus.');
    }
}

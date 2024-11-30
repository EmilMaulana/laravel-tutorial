<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Menyimpan data ke database
        Contact::create($validatedData);

        return redirect('/form')->with('success', 'Pesan kamu berhasil terkirim!');
    }
}

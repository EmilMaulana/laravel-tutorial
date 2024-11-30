<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // Mengambil semua data kontak
        return view('contacts.index', compact('contacts'));
    }
}

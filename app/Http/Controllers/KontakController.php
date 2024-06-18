<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class KontakController extends Controller
{

    public function Kontak()
    {
        return view('kontak');
    }

    // Funtion Simpan    
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string',
        ]);

        // Membuat instance baru dari model Contact dan mengisinya dengan data yang diinput
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save(); // Menyimpan data ke dalam database

        // Mengembalikan redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}


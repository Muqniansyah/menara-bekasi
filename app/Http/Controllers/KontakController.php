<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        // VALIDASI INPUT
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'telepon' => 'required',
            'subjek' => 'required',
            'pesan' => 'required|min:5',
        ]);

        // KIRIM EMAIL
        Mail::raw("
Nama: {$request->nama}
Email: {$request->email}
Telepon: {$request->telepon}
Subjek: {$request->subjek}

Pesan:
{$request->pesan}
", function ($message) use ($request) {
            $message->to('menarabekasiblog@gmail.com'); // ganti ke email tujuan kamu
            $message->subject('Pesan Baru dari Form Kontak');
        });

        return back()->with('success', 'Pesan berhasil dikirim! Kami akan membalas dalam 24 jam.');
    }
}

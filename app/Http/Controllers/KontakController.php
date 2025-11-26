<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // UNTUK SAAT INI: SIMPLY RETURN SUCCESS
        return back()->with('success', 'Pesan berhasil dikirim! Kami akan membalas dalam 24 jam.');
    }
}

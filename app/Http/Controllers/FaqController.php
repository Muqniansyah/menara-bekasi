<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                "title" => "Apa itu standar ISPM 15 dan mengapa penting untuk ekspor?",
                "content" => "ISPM 15 adalah standar internasional untuk perlakuan kemasan kayu guna mencegah penyebaran organisme pengganggu tumbuhan (OPT). 
                Standar ini wajib digunakan untuk semua pengiriman komoditas menggunakan pallet atau kemasan kayu ke negara tujuan ekspor. 
                Tanpa sertifikasi ISPM 15, barang berisiko ditolak di pelabuhan atau dikembalikan.",
            ],
            [
                "title" => "Apakah PT. Menara Bekasi memiliki izin resmi untuk melakukan perlakuan ISPM 15?",
                "content" => "Ya. PT. Menara Bekasi terdaftar secara resmi di Badan Karantina Pertanian dengan nomor registrasi ID-139, 
                sehingga berwenang melakukan perlakuan, produksi, dan pembubuhan cap resmi ISPM 15 sesuai ketentuan.",
            ],
            [
                "title" => "Jenis kemasan kayu apa saja yang diproduksi oleh PT. Menara Bekasi?",
                "content" => "Kami memproduksi berbagai jenis kemasan kayu untuk kebutuhan ekspor, termasuk pallet kayu, dunnage, peti kayu (crate), wooden box, dan plywood packaging. 
                Seluruh produk dapat dilengkapi dengan perlakuan dan sertifikasi ISPM 15.",
            ],
            [
                "title" => "Apakah PT. Menara Bekasi menerima sertifikasi ISPM 15 untuk kemasan kayu dari perusahaan lain?",
                "content" => "Ya. Selain memproduksi kemasan kayu, kami menyediakan layanan sertifikasi ISPM 15 bagi produk kemasan kayu yang dibuat oleh pihak lain, 
                selama bahan dan prosesnya memenuhi persyaratan karantina.",
            ],
        ];

        // Kirim data ke view
        return view('pages.beranda', compact('faqs'));
    }
}

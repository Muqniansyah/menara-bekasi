<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = [
            [
                "title" => "Penanganan Kayu Pallet ISPM 15 untuk Ekspor Sukses",
                "date" => "06 September 2025",
                "day" => "06",
                "month" => "Sep",
                "image" => "images/blog/web-1.jpg",
                "excerpt" => "Palet kayu yang rusak, terutama yang memiliki paku berkarat, dapat menyebabkan cedera serius bagi pekerja. Palet berat juga bisa menimpa pekerja jika tidak disimpan atau dipindahkan dengan benar.",
                "link" => "https://menarabekasi.netlify.app/"
            ],
            [
                "title" => "Pemilihan Jenis Kayu Ekspor Legal & Standar ISPM 15",
                "date" => "15 September 2025",
                "day" => "15",
                "month" => "Sep",
                "image" => "images/blog/web-2.jpg",
                "excerpt" => "Pemilihan kayu harus mempertimbangkan jenis produk dan negara tujuan. Kayu lunak seperti pine lebih ringan dan ekonomis, sedangkan kayu keras seperti mahoni atau jati lebih awet dan cocok untuk produk premium.",
                "link" => "https://muqniansyah.github.io/menara-blog/"
            ],
            [
                "title" => "Kendala dalam Kerjasama Bisnis dengan Vendor: Tantangan & Solusi",
                "date" => "22 September 2025",
                "day" => "22",
                "month" => "Sep",
                "image" => "images/blog/web-3.jpg",
                "excerpt" => "Hubungan dengan vendor yang baik dapat membantu perusahaan lebih efisien, mengurangi biaya, serta meningkatkan daya saing di pasar.",
                "link" => "https://menarabekasi.vercel.app/"
            ],
            [
                "title" => "Perbedaan Kayu ISPM 15 dan Non ISPM 15",
                "date" => "29 September 2025",
                "day" => "29",
                "month" => "Sep",
                "image" => "images/blog/web-4.jpg",
                "excerpt" => "Setiap kayu yang sudah memenuhi standar ISPM 15 akan diberi tanda khusus berupa logo resmi yang diakui secara global. Dengan adanya sertifikasi ini, kayu jadi aman digunakan untuk ekspor tanpa risiko ditolak di negara tujuan.",
                "link" => "https://blogmenara.pages.dev/"
            ],
            [
                "title" => "Panduan Lengkap ISPM 15",
                "date" => "06 Oktober 2025",
                "day" => "06",
                "month" => "Okt",
                "image" => "images/blog/web-5.jpg",
                "excerpt" => "Dalam dunia perdagangan internasional, kayu menjadi salah satu material penting yang sering digunakan untuk kemasan dan pengiriman barang. Namun, tidak semua kayu dapat langsung digunakan untuk ekspor.",
                "link" => "https://menarabekasi-bbeb1.web.app/"
            ],
            [
                "title" => "Mengapa Pemilihan Kayu Harus dari Vendor Berlisensi ISPM 15",
                "date" => "13 Oktober 2025",
                "day" => "13",
                "month" => "Okt",
                "image" => "images/blog/web-6.jpg",
                "excerpt" => "Dalam dunia ekspor produk berbahan kayu, pemilihan kayu yang tepat bukan sekadar soal kualitas fisik, tetapi juga kepatuhan terhadap standar internasional.",
                "link" => "https://muqniansyah.codeberg.page/bekasimenara/"
            ],
            [
                "title" => "Langkah Cerdas Riset Vendor Sebelum Kerjasama Bisnis",
                "date" => "20 Oktober 2025",
                "day" => "20",
                "month" => "Okt",
                "image" => "images/blog/web-7.jpeg",
                "excerpt" => "Riset vendor bukan sekadar formalitas. ini adalah investasi waktu dan strategi untuk menghindari masalah di kemudian hari. Dengan memahami profil dan rekam jejak vendor, perusahaan dapat memastikan kerja sama yang aman dan saling menguntungkan.",
                "link" => "https://webmenara.vercel.app/"
            ],
            [
                "title" => "Legalitas Ekspor Kayu: Panduan Lengkap Dokumen, Perizinan, dan Sertifikasi SVLK",
                "date" => "27 Oktober 2025",
                "day" => "27",
                "month" => "Okt",
                "image" => "images/blog/web-8.jpeg",
                "excerpt" => "Legalitas ekspor kayu adalah pembuktian bahwa produk kayu yang diekspor berasal dari sumber yang sah dan terverifikasi. Ini berarti kayu tidak berasal dari pembalakan liar.",
                "link" => "https://menaraweb.vercel.app/"
            ],
            [
                "title" => "Pembuatan Pallet Kayu Ekspor: Proses dan Standar ISPM 15",
                "date" => "03 November 2025",
                "day" => "03",
                "month" => "Nov",
                "image" => "images/blog/web-9.jpg",
                "excerpt" => "Pallet kayu adalah alas datar yang digunakan untuk menopang, menyusun, dan memindahkan barang dalam proses distribusi dan ekspor.",
                "link" => "https://blogwebmenara.vercel.app/"
            ],
            [
                "title" => "Efisiensi Pengiriman dan Pengemasan Kayu Ekspor: Tips Menghemat Biaya & Waktu",
                "date" => "10 November 2025",
                "day" => "10",
                "month" => "Nov",
                "image" => "images/blog/web-10.jpg",
                "excerpt" => "Dalam dunia ekspor kayu, efisiensi bukan hanya soal kecepatan, tapi juga tentang bagaimana setiap tahap dapat berjalan hemat biaya dan waktu tanpa menurunkan kualitas.",
                "link" => "https://blogbekasimenara.vercel.app/"
            ],
            [
                "title" => "Mengenal Kayu Ramah Lingkungan dan Sertifikasi Hijau untuk Ekspor Berkelanjutan",
                "date" => "17 November 2025",
                "day" => "17",
                "month" => "Nov",
                "image" => "images/blog/web-11.jpg",
                "excerpt" => "Kayu ramah lingkungan adalah kayu yang diperoleh melalui proses pengelolaan hutan yang bertanggung jawab. Pohon yang ditebang diganti dengan penanaman kembali.",
                "link" => "https://web-menarabks.vercel.app/"
            ],
            [
                "title" => "Digitalisasi & Inovasi Teknologi Kayu Ekspor",
                "date" => "24 November 2025",
                "day" => "24",
                "month" => "Nov",
                "image" => "images/blog/web-12.jpg",
                "excerpt" => "Kemajuan teknologi tidak hanya berdampak pada manajemen ekspor, tapi juga pada proses pengolahan kayu itu sendiri. Mesin CNC, AI-assisted grading, dan pengeringan otomatis menjadi contoh nyata penerapan inovasi.",
                "link" => "https://menara-bekasiweb.vercel.app/"
            ],
        ];

        // Kirim semua posts ke view — pagination ditangani JS
        return view('pages.blog', ['posts' => $posts]);
    }
}

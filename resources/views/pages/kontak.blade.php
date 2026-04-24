@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="w-full min-h-screen bg-[#f7f7ff] flex items-center justify-center px-6 md:px-16 relative overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full max-w-7xl mx-auto">
        {{-- LEFT IMAGE --}}
        <div class="relative w-full flex justify-center md:justify-start">
            <img src="{{ img('images/kontak/kontak-header.png') }}"
                alt="model-kontak-header"
                class="kontak-img w-[80%] md:w-[90%] max-w-lg object-contain select-none">
        </div>

        {{-- RIGHT TEXT CONTENT --}}
        <div class="text-gray-900 space-y-6 md:pl-10 text-right">
            <h1 class="text-title text-4xl md:text-6xl font-semibold leading-tight font-['Playfair_Display']">
                Konsultasi cepat.<br>
                Tim siap bantu.
            </h1>

            <p class="text-gray-600 text-base md:text-lg max-w-md ml-auto">
                Tim kami siap membantu menjawab pertanyaan Anda dengan respons yang cepat dan profesional.
                Hubungi kami kapan saja melalui layanan kontak yang tersedia.
            </p>

            <div class="flex justify-end">
                <a href="https://wa.me/6285817298071"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block bg-gray-500 hover:bg-gray-600 text-white font-medium px-6 py-3 rounded-lg transition">
                    Mulai Chat dengan Tim Kami
                </a>
            </div>
        </div>
    </div>
</section>

{{-- LAYANAN --}}
<section class="w-full py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <!-- Title -->
        <h2 class="text-3xl md:text-5xl font-semibold text-gray-900 font-['Playfair_Display']" data-aos="fade-up" data-aos-duration="800">
            Mengalami Kendala?
        </h2>

        <!-- Subtitle -->
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
            Berikut adalah panduan untuk mengatasi masalah umum dalam menghubungi kami.
        </p>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <!-- Card 1 -->
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="900" class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Telepon Tidak Tersambung
                    </h3>
                    <span class="text-gray-500">↗</span>
                </div>
                <ul class="text-gray-600 text-sm mt-3 space-y-2 text-left">
                    <li>Coba hubungi di luar jam sibuk (10:00–12:00 atau 14:00–16:00)</li>
                    <li>Gunakan WhatsApp Business: (+62) 858-1729-8071</li>
                    <li>Kirim email untuk jadwal callback</li>
                    <li>Gunakan form kontak di bawah</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="900" class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Email Tidak Dibalas
                    </h3>
                    <span class="text-gray-500">↗</span>
                </div>
                <ul class="text-gray-600 text-sm mt-3 space-y-2 text-left">
                    <li>Periksa folder spam/junk email Anda</li>
                    <li>Tunggu maksimal 24 jam untuk respons</li>
                    <li>Pastikan subjek email jelas dan spesifik</li>
                    <li>Kirim ulang dengan detail lebih lengkap</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="900" class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Layanan Chat Offline
                    </h3>
                    <span class="text-gray-500">↗</span>
                </div>
                <ul class="text-gray-600 text-sm mt-3 space-y-2 text-left">
                    <li>Gunakan WhatsApp sebagai alternatif</li>
                    <li>Coba refresh halaman website</li>
                    <li>Nonaktifkan ad-blocker sementara</li>
                    <li>Hubungi melalui email atau telepon</li>
                </ul>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <!-- Card 4 -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="900" class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Bantuan Prioritas
                    </h3>
                    <span class="text-gray-500">↗</span>
                </div>
                <ul class="text-gray-600 text-sm mt-3 space-y-2 text-left">
                    <li>WhatsApp: (+62) 858-1729-8071</li>
                    <li>Email: sales@menarabekasilestari.com</li>
                    <li>Kunjungi kantor kami langsung</li>
                    <li>Hubungi di jam operasional untuk respons cepat</li>
                </ul>
            </div>

            <!-- Card 5 -->
            <div data-aos="fade-up" data-aos-delay="600" data-aos-duration="900" class="p-6 border border-gray-200 rounded-2xl hover:shadow-md transition hover:-translate-y-1 bg-white">
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Masalah Teknis
                    </h3>
                    <span class="text-gray-500">↗</span>
                </div>
                <ul class="text-gray-600 text-sm mt-3 space-y-2 text-left">
                    <li>Clear cache dan cookies browser</li>
                    <li>Coba gunakan browser berbeda</li>
                    <li>Periksa koneksi internet Anda</li>
                    <li>Laporkan ke tim IT melalui email</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- SECTION KONTAK --}}
<section class="w-full px-4 py-12 bg-white">
    <div class="max-w-6xl mx-auto bg-indigo-50 rounded-3xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        <!-- LEFT SECTION -->
        <div class="p-10 space-y-6 flex flex-col justify-center">
            <h2 class="text-4xl font-semibold text-gray-900">
                Konsultasikan Kebutuhan Anda
            </h2>

            <!-- EMAIL -->
            <div class="flex items-start gap-3">
                <i data-feather="mail" class="w-6 h-6"></i>
                <div>
                    <p class="font-semibold text-gray-800">Email</p>
                    <p class="text-gray-700">sales@menarabekasilestari.com</p>
                </div>
            </div>

            <!-- TELEPON -->
            <div class="flex items-start gap-3">
                <i data-feather="phone" class="w-6 h-6"></i>

                <div>
                    <p class="font-semibold text-gray-800">Telepon</p>
                    <p class="text-gray-700">+62 858-1729-8071</p>
                </div>
            </div>

            <!-- JAM OPERASIONAL -->
            <div class="flex items-start gap-3">
                <i data-feather="clock" class="w-6 h-6"></i>
                <div>
                    <p class="font-semibold text-gray-800">Jam Operasional</p>
                    <p class="text-gray-700">Senin – Sabtu, 08.00 – 17.00</p>
                </div>
            </div>

            <!-- SOSMED -->
            <div class="flex items-center gap-5">
                <a href="https://www.instagram.com/ptkemaskayuindonesia/" target="_blank" rel="noopener noreferrer"
                    class="group flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-pink-500 transition-all duration-300 hover:scale-110 hover:rotate-3">
                    <i data-feather="instagram" class="w-5 h-5 hover:text-pink-500"></i>
                </a>

                <a href="https://www.tiktok.com/@kemaskayuindonesia" target="_blank" rel="noopener noreferrer"
                    class="group flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-black transition-all duration-300 hover:scale-110 hover:-rotate-3">
                    <i class="bi bi-tiktok"></i>
                </a>
            </div>
        </div>

        <!-- RIGHT SECTION MAP -->
        <div class="h-[350px] md:h-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3965.64906871293!2d107.0294167!3d-6.30975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTgnMzUuMSJTIDEwN8KwMDEnNDUuOSJF!5e0!3m2!1sid!2sid!4v1764145555976!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

{{-- FORM KONTAK --}}
<section class="py-20 ">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        {{-- KIRI: FORM KONTAK --}}
        <div class="bg-white p-10 rounded-3xl shadow-lg">

            <!-- pemberitahuan (digunakan JS, bukan session) -->
            <div id="notif"></div>

            <span class="text-sm text-pink-600 font-semibold">Dapatkan Bantuan</span>

            <h2 class="text-4xl font-bold text-gray-900 mt-2 leading-tight">
                Hubungi Kami
            </h2>

            <p class="text-gray-600 mt-3 mb-8">
                Ada pertanyaan atau butuh bantuan? Isi formulir di bawah, kami akan membalas dalam 24 jam.
            </p>

            <form id="kontakForm" class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                {{-- NAMA --}}
                <div class="sm:col-span-1">
                    <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                    <input type="text" name="nama"
                        class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-300 focus:border-green-500"
                        placeholder="Masukkan nama anda" required>
                </div>

                {{-- EMAIL --}}
                <div class="sm:col-span-1">
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email"
                        class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-300"
                        placeholder="contoh@mail.com" required>
                </div>

                {{-- NO TELP --}}
                <div class="sm:col-span-1">
                    <label class="block text-sm font-medium mb-1">No. Telepon</label>
                    <input type="text" name="telepon"
                        class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-300"
                        placeholder="08xxxxxxxx" required>
                </div>

                {{-- SUBJECT --}}
                <div class="sm:col-span-1">
                    <label class="block text-sm font-medium mb-1">Subjek</label>
                    <input type="text" name="subjek"
                        class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-300"
                        placeholder="Subjek pesan" required>
                </div>

                {{-- PESAN --}}
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea name="pesan" rows="5"
                        class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-300"
                        placeholder="Tuliskan pesan anda..." required></textarea>
                </div>

                {{-- BUTTON --}}
                <div class="sm:col-span-2">
                    <button
                        class="w-full bg-gray-500 hover:bg-gray-600 text-white py-3 rounded-xl text-lg font-semibold transition cursor-pointer">
                        Kirim Pesan
                    </button>
                </div>
            </form>

        </div>

        {{-- KANAN: GAMBAR --}}
        <div class="flex justify-center">
            <div class="kontak-bg rounded-3xl overflow-hidden shadow-lg">
                <img src="{{ img('images/navbar.png') }}"
                    class="w-full h-full object-cover animate-zoom" alt="Contact Illustration">
            </div>
        </div>
    </div>
</section>

{{-- MODAL PROMO ALERT --}}
<div x-data="whatsappPromo()">
    <!-- Overlay -->
    <div
        x-show="show"
        x-transition.opacity
        x-cloak
        class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40">
    </div>

    <!-- Popup -->
    <div x-show="show"
        x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        x-cloak
        class="fixed inset-0 flex items-center justify-center z-50 p-4">

        <div class="relative bg-white w-[480px] md:w-[520px] rounded-2xl shadow-2xl border p-8 flex items-start gap-5">
            <!-- Foto -->
            <img src="{{ img('images/kontak/menara.png') }}"
                class="w-20 h-20 rounded-full object-cover shadow">

            <div class="flex-1">
                <h3 class="text-2xl font-semibold">Halo! 😊</h3>
                <p class="text-gray-600 text-base leading-relaxed mt-1">
                    Ada yang bisa saya bantu terkait kebutuhan kemasan kayu & sertifikasi ISPM 15?
                </p>

                <!-- Tombol WA -->
                <a href="https://wa.me/6285817298071"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-5 inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl text-base font-medium transition cursor-pointer">
                    <i class="bi bi-whatsapp text-xl"></i>
                    Chat WhatsApp
                </a>
            </div>

            <!-- Close -->
            <button @click="closePopup"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl cursor-pointer">
                &times;
            </button>
        </div>
    </div>
</div>

@endsection
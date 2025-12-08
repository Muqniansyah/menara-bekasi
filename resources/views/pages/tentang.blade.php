@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('images/tentang-hero.jpeg') }}"
        alt="Tentang Hero"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Gradient Overlay (White → Transparent → Black Transparan) -->
    <div
        class="absolute inset-0"
        style="background: linear-gradient(
            to bottom,
            rgba(255,255,255,0.55) 0%,   /* putih terang di atas */
            rgba(255,255,255,0.15) 20%,  /* memudar */
            rgba(0,0,0,0.25) 70%,        /* mulai gelap */
            rgba(0,0,0,0.35) 100%        /* paling gelap bawah */
        );">
    </div>

    <!-- Center Text -->
    <div class="relative z-10 flex items-center justify-center h-full">
        <h1 id="judul" class="text-white text-4xl md:text-6xl font-['Playfair_Display'] tracking-wide">
            Tentang
        </h1>
    </div>
</section>

{{-- CONTENT SECTION --}}
<section class="w-full max-w-6xl mx-auto py-14 px-5 md:px-0">
    {{-- GRID PERTAMA --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        {{-- VIDEO PERUSAHAAN --}}
        <div class="w-full">
            <video
                class="w-full h-72 md:h-96 object-cover rounded-lg shadow-md"
                autoplay
                muted
                loop
                playsinline>
                <source src="{{ asset('images/tentang/menara.mp4') }}" type="video/mp4">
            </video>
        </div>

        {{-- TEKS PROFIL --}}
        <div class="space-y-5 text-gray-700 leading-relaxed">
            <h3 class="text-2xl md:text-3xl font-['Playfair_Display'] font-semibold">
                Pemasok Kemasan Kayu Indonesia Bersertifikat ISPM 15
            </h3>

            <p>
                <strong>PT. Menara Bekasi</strong> adalah perusahaan resmi terdaftar di Badan Karantina Pertanian
                dengan nomor registrasi <strong>ID-139</strong>, fokus pada layanan kemasan kayu untuk kebutuhan ekspor
                dengan standar internasional ISPM 15.
            </p>

            <p>
                Kami memproduksi pallet kayu, dunnage, peti kayu, wooden box, dan plywood packaging yang telah
                memenuhi standar global dan siap digunakan untuk pengiriman internasional.
            </p>

            <p>
                Layanan kami mencakup seluruh proses: pemilihan bahan baku, perlakuan ISPM 15, produksi,
                penyimpanan, distribusi, pembubuhan cap ISPM 15, hingga pengawasan pencegahan reinfestasi OPT.
            </p>
        </div>
    </div>

    {{-- GRID KEDUA --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mt-16">
        {{-- TEKS PROFIL (KIRI) --}}
        <div class="space-y-5 text-gray-700 leading-relaxed order-2 md:order-1" data-aos="fade-right" data-aos-once="true">
            <h3 class="text-2xl md:text-3xl font-['Playfair_Display'] font-semibold">
                Layanan Heat Treatment Profesional & Pengemasan Kayu
            </h3>

            <p>
                PT. Menara Bekasi menyediakan layanan perlakuan panas (Heat Treatment) bersertifikat ISPM 15
                untuk menjamin seluruh kemasan kayu memenuhi standar internasional dan aman untuk pengiriman ekspor.
            </p>

            <p>
                Dengan fasilitas modern dan tenaga ahli berpengalaman, kami memastikan proses HT berlangsung
                tepat suhu, tepat waktu, dan sesuai regulasi Badan Karantina Pertanian.
            </p>

            <p>
                Keamanan, kualitas, dan kepatuhan adalah prioritas utama kami dalam setiap proses layanan.
            </p>
        </div>

        {{-- VIDEO PERUSAHAAN (KANAN) --}}
        <div class="w-full order-1 md:order-2" data-aos="fade-left" data-aos-once="true">
            <video
                class="w-full h-72 md:h-96 object-cover rounded-lg shadow-md"
                autoplay
                muted
                loop
                playsinline>
                <source src="{{ asset('images/tentang/layanan.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>

    {{-- VISI & MISI (DESAIN BARU) --}}
    <div class="mt-20">
        {{-- VISI --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-[#f4f0e6] p-10 rounded-xl" data-aos="zoom-in-down" data-aos-once="true">
            {{-- Judul Visi --}}
            <div>
                <span class="text-xs tracking-wide border px-3 py-1 rounded-full">
                    VISI KAMI
                </span>

                <h3 class="mt-4 text-3xl md:text-4xl font-semibold leading-tight"
                    style="font-family:'Playfair Display', serif;">
                    Visi Perusahaan<br>PT. Menara Bekasi
                </h3>
            </div>

            {{-- Isi Visi --}}
            <div class="flex items-center">
                <p class="text-gray-700 leading-relaxed text-lg">
                    Menjadi penyedia kemasan kayu berstandar internasional yang terpercaya
                    dan mendukung kelancaran ekspor global melalui penerapan standar ISPM 15.
                </p>
            </div>
        </div>

        {{-- MISI (VERSI RESMI + GARIS PEMBATAS) --}}
        <div class="mt-16 bg-[#f4f0e6] p-10 rounded-xl" data-aos="zoom-in-down" data-aos-once="true">
            <span class="text-xs tracking-wide border px-3 py-1 rounded-full">
                MISI KAMI
            </span>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-6">
                {{-- Judul --}}
                <div>
                    <h3 class="text-3xl md:text-4xl font-semibold leading-tight"
                        style="font-family:'Playfair Display', serif;">
                        Misi Perusahaan PT. Menara Bekasi
                    </h3>
                </div>

                {{-- Daftar Misi --}}
                <div class="space-y-8 text-gray-700">
                    {{-- 1 --}}
                    <div data-aos="zoom-out" data-aos-delay="200" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">1.</span>
                            <p>Menerapkan standar ISPM 15 secara konsisten pada seluruh proses perlakuan dan produksi kemasan kayu.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 2 --}}
                    <div data-aos="zoom-out" data-aos-delay="400" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">2.</span>
                            <p>Memberikan layanan berkualitas tinggi mulai dari seleksi bahan baku hingga pengiriman kemasan kayu ke pelanggan.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 3 --}}
                    <div data-aos="zoom-out" data-aos-delay="600" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">3.</span>
                            <p>Menjamin keamanan dan kepatuhan regulasi untuk setiap kemasan kayu yang digunakan dalam perdagangan internasional.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 4 --}}
                    <div data-aos="zoom-out" data-aos-delay="800" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">4.</span>
                            <p>Meningkatkan kompetensi tim melalui pelatihan, pengembangan, dan penerapan sistem manajemen mutu.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 5 --}}
                    <div data-aos="zoom-out" data-aos-delay="1000" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">5.</span>
                            <p>Membangun kerja sama dan kepercayaan dengan pelanggan, pemerintah, dan mitra usaha.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 6 --}}
                    <div data-aos="zoom-out" data-aos-delay="1200" data-aos-once="true">
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">6.</span>
                            <p>Mengembangkan inovasi dalam proses produksi, perlakuan, dan teknologi untuk menciptakan kemasan kayu yang aman, efisien, dan ramah lingkungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- JENIS KAYU --}}
<section class="py-20 bg-[#F5EFE7]">
    <div class="container mx-auto px-4">
        {{-- Judul dengan animasi --}}
        <h2 data-aos="fade-down" data-aos-duration="800"
            class="text-3xl md:text-4xl font-bold font-['Playfair_Display'] text-center mb-12">
            Jenis Kayu yang Kami Sediakan
        </h2>

        <div class="grid gap-10 md:grid-cols-3">
            @foreach ([
            ['nama' => 'Kayu Racuk', 'deskripsi' => 'Serbaguna dan kuat, cocok untuk konstruksi dan furnitur.', 'foto' => 'kayu-racuk.jpg'],
            ['nama' => 'Kayu Mahoni', 'deskripsi' => 'Warna merah elegan, ideal untuk furnitur premium.', 'foto' => 'kayu-mahoni.jpg'],
            ['nama' => 'Kayu Meranti', 'deskripsi' => 'Ringan namun tahan lama, cocok untuk panel dan kusen.', 'foto' => 'kayu-meranti.jpg'],
            ['nama' => 'Kayu Jati', 'deskripsi' => 'Paling premium dan tahan cuaca, cocok outdoor.', 'foto' => 'kayu-jati.jpg'],
            ['nama' => 'Kayu Sengon', 'deskripsi' => 'Ringan dan mudah dibentuk, ideal untuk industri kerajinan.', 'foto' => 'kayu-sengon.jpg'],
            ['nama' => 'Kayu Kamper', 'deskripsi' => 'Kuat dan awet, banyak dipakai untuk konstruksi.', 'foto' => 'kayu-kamper.jpg'],
            ] as $index => $kayu)

            {{-- Card dengan animasi zoom-in dan delay otomatis --}}
            <div data-aos="zoom-in"
                data-aos-delay="{{ $index * 150 }}"
                data-aos-duration="800"
                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">

                <img src="{{ asset('images/tentang/' . $kayu['foto']) }}"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">

                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">
                        {{ $kayu['nama'] }}
                    </h3>

                    <p class="text-gray-600 mb-5 leading-relaxed">
                        {{ $kayu['deskripsi'] }}
                    </p>

                    @php
                    $pesan = urlencode("Halo Admin, saya ingin menanyakan tentang {$kayu['nama']}.");
                    @endphp

                    <a href="https://wa.me/6285817298071?text={{ $pesan }}"
                        target="_blank"
                        class="inline-block px-5 py-2 rounded-lg font-medium text-white 
                              bg-[#C8A27A] hover:bg-[#b48a62] transition shadow-md">
                        Konsultasi Kayu
                    </a>
                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- GALERI --}}
<section class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold font-['Playfair_Display'] text-center mb-10">
            Galeri Proyek & Produksi
        </h2>

        <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">

            @foreach ([
            'galeri/galeri-1.jpeg',
            'galeri/galeri-2.jpeg',
            'galeri/galeri-3.jpeg',
            'galeri/galeri-4.jpeg',
            'galeri/galeri-5.jpg',
            'galeri/galeri-6.jpg'
            ] as $index => $foto)

            <div class="break-inside-avoid overflow-hidden rounded-xl shadow
                gallery-item opacity-0 translate-y-6 gallery-delay-{{ $index + 1 }}">
                <img
                    src="{{ asset('images/' . $foto) }}"
                    class="w-full h-auto object-cover gallery-img cursor-pointer">
            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- LIGHTBOX --}}
<div id="lightbox"
    class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden justify-center items-center z-50">
    <img id="lightbox-img"
        class="max-w-[90%] max-h-[90%] rounded-xl shadow-xl border-4 border-white">
</div>
@endsection
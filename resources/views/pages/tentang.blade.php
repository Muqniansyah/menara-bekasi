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
        <h1 class="text-white text-4xl md:text-6xl font-['Playfair_Display'] tracking-wide">
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
        <div class="space-y-5 text-gray-700 leading-relaxed order-2 md:order-1">
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
        <div class="w-full order-1 md:order-2">
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-[#f4f0e6] p-10 rounded-xl">
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
        <div class="mt-16 bg-[#f4f0e6] p-10 rounded-xl">
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
                    <div>
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">1.</span>
                            <p>Menerapkan standar ISPM 15 secara konsisten pada seluruh proses perlakuan dan produksi kemasan kayu.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 2 --}}
                    <div>
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">2.</span>
                            <p>Memberikan layanan berkualitas tinggi mulai dari seleksi bahan baku hingga pengiriman kemasan kayu ke pelanggan.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 3 --}}
                    <div>
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">3.</span>
                            <p>Menjamin keamanan dan kepatuhan regulasi untuk setiap kemasan kayu yang digunakan dalam perdagangan internasional.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 4 --}}
                    <div>
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">4.</span>
                            <p>Meningkatkan kompetensi tim melalui pelatihan, pengembangan, dan penerapan sistem manajemen mutu.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 5 --}}
                    <div>
                        <div class="flex gap-4">
                            <span class="text-2xl font-semibold"
                                style="font-family:'Playfair Display', serif;">5.</span>
                            <p>Membangun kerja sama dan kepercayaan dengan pelanggan, pemerintah, dan mitra usaha.</p>
                        </div>
                        <div class="border-b border-gray-300 mt-4"></div>
                    </div>

                    {{-- 6 --}}
                    <div>
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
            ] as $foto)

            <div class="break-inside-avoid overflow-hidden rounded-xl shadow">
                <img
                    src="{{ asset('images/' . $foto) }}"
                    class="w-full h-auto object-cover hover:opacity-80 transition">
            </div>

            @endforeach
        </div>
    </div>
</section>
@endsection
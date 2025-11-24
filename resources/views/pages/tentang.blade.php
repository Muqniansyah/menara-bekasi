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

    {{-- Judul Seksi --}}
    <h2 class="text-3xl md:text-4xl font-['Playfair_Display'] font-semibold text-center mb-10">
        PT. Menara Bekasi
    </h2>

    {{-- GRID UTAMA --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        {{-- GAMBAR PERUSAHAAN --}}
        <div class="w-full">
            <img
                src="{{ asset('images/tentang.jpeg') }}"
                alt="Tentang Perusahaan"
                class="w-full h-72 md:h-96 object-cover rounded-lg shadow-md">
        </div>

        {{-- TEKS PROFIL --}}
        <div class="space-y-5 text-gray-700 leading-relaxed text-justify">
            <p>
                <strong>PT. Menara Bekasi</strong> adalah perusahaan terdaftar di Badan Karantina Pertanian Indonesia
                dengan nomor registrasi <strong>ID-139</strong>, berfokus pada penyediaan layanan kemasan kayu
                berstandar internasional ISPM 15 untuk kebutuhan ekspor.
            </p>

            <p>
                Kami memproduksi beragam kemasan kayu seperti pallet kayu, dunnage, peti kayu, wooden box,
                dan plywood packaging, lengkap dengan sertifikasi ISPM 15 yang memenuhi standar global.
            </p>

            <p>
                Selain produksi, kami menyediakan layanan menyeluruh: mulai dari pemilihan bahan baku,
                proses perlakuan, produksi, penyimpanan, pengangkutan, pembubuhan cap ISPM 15,
                hingga pengawasan penggunaan serta pencegahan reinfestasi OPT dalam proses pengapalan.
            </p>

            <p>
                Dengan komitmen pada kualitas, PT. Menara Bekasi terus mengembangkan pelayanan untuk menjadi
                perusahaan kemasan kayu dan sertifikasi ISPM 15 yang terpercaya dan bertaraf internasional.
            </p>
        </div>
    </div>

    {{-- VISI & MISI --}}
    <div class="mt-16">

        <h3 class="text-2xl md:text-3xl font-['Playfair_Display'] font-semibold mb-6 text-center">
            Visi & Misi Perusahaan
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- VISI --}}
            <div class="p-6 border rounded-lg shadow-sm bg-white">
                <h4 class="text-xl font-semibold mb-3 font-['Playfair_Display']">Visi</h4>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi perusahaan penyedia kemasan kayu berstandar internasional yang terpercaya
                    dan mendukung kelancaran ekspor melalui penerapan standar ISPM 15 secara profesional.
                </p>
            </div>

            {{-- MISI --}}
            <div class="p-6 border rounded-lg shadow-sm bg-white">
                <h4 class="text-xl font-semibold mb-3 font-['Playfair_Display']">Misi</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2 leading-relaxed">
                    <li>Menerapkan standar ISPM 15 secara konsisten pada seluruh proses perlakuan dan produksi.</li>
                    <li>Memberikan layanan berkualitas dari pemilihan bahan baku hingga pengiriman.</li>
                    <li>Menjamin keamanan dan kepatuhan regulasi pada setiap kemasan ekspor.</li>
                    <li>Meningkatkan kompetensi tim melalui sistem manajemen mutu.</li>
                    <li>Membangun kerja sama dan kepercayaan dengan pihak terkait.</li>
                    <li>Mengembangkan inovasi dalam produksi dan perlakuan kemasan kayu.</li>
                </ul>
            </div>

        </div>

    </div>

</section>

@endsection
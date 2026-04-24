@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ img('images/blog-hero.jpeg') }}"
        alt="Blog Hero"
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
            Blog
        </h1>
    </div>
</section>

{{-- BLOG CONTENT --}}
<div class="w-full max-w-6xl mx-auto py-12 px-4 md:px-0">
    <div class="flex flex-col md:flex-row gap-10 mt-10">
        {{-- LEFT CONTENT --}}
        <div class="w-full md:w-8/12 space-y-12">
            {{-- Artikel --}}
            @foreach($posts as $post)
            <div class="border-b pb-10">
                <h2 class="text-center text-base font-bold tracking-wide font-['Playfair_Display']">BLOG</h2>
                <h3 class="text-2xl font-semibold mb-2 text-center font-['Playfair_Display']">
                    {{ $post['title'] }}
                </h3>

                <div class="w-16 h-0.5 bg-gray-300 mx-auto my-4"></div>

                <p class="text-sm text-gray-500 mb-6 text-center">
                    Diposting pada {{ $post['date'] }} oleh Menara Bekasi
                </p>

                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-5/12 relative">
                        <div class="w-full h-48 md:h-56 overflow-hidden rounded">
                            <img src="{{ img($post['image']) }}" class="w-full h-full object-cover">
                        </div>

                        <div class="absolute inset-0 bg-black/30"></div>

                        <div class="absolute left-3 top-3 flex flex-col items-center">
                            <span class="block w-px h-6 bg-white/70"></span>
                            <p class="text-3xl font-bold text-white leading-none mt-1">{{ $post['day'] }}</p>
                            <p class="text-xs uppercase tracking-wide text-white mt-0.5">{{ $post['month'] }}</p>
                            <span class="block w-px h-6 bg-white/70 mt-1"></span>
                        </div>
                    </div>

                    <div class="w-full md:w-7/12">
                        <p class="text-gray-600 leading-relaxed">
                            {{ $post['excerpt'] }}
                        </p>

                        <a href="{{ $post['link'] }}" target="_blank" rel="noopener noreferrer" class="inline-block mt-4">
                            <button class="px-6 py-2 border rounded hover:bg-gray-100 transition cursor-pointer">
                                Lanjutkan Membaca →
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- PAGINATION --}}
            <div class="mt-10">
                {{ $posts->links() }}
            </div>

        </div>
        {{-- SIDEBAR --}}
        <aside class="w-full md:w-4/12">
            <h4 class="text-xl font-semibold mb-4 font-['Playfair_Display']">Postingan Terbaru</h4>
            <ul class="space-y-3 text-gray-700">
                <li><a href="https://menara-bekasiweb.vercel.app/" target="_blank" rel="noopener noreferrer" class="hover:text-[#C8A27A]">Digitalisasi & Inovasi Teknologi Kayu Ekspor</a></li>
                <li><a href="https://muqniansyah.github.io/menara-blog/" target="_blank" rel="noopener noreferrer" class="hover:text-[#C8A27A]">Pemilihan Jenis Kayu Ekspor</a></li>
                <li><a href="https://webmenara.vercel.app/" target="_blank" rel="noopener noreferrer" class="hover:text-[#C8A27A]">Langkah Cerdas Riset Vendor</a></li>
                <li><a href="https://menaraweb.vercel.app/" target="_blank" rel="noopener noreferrer" class="hover:text-[#C8A27A]">Legalitas Ekspor Kayu</a></li>
            </ul>
        </aside>
    </div>
</div>

@endsection
@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <img
        src="{{ img('images/blog-hero.jpeg') }}"
        alt="Blog Hero"
        class="absolute inset-0 w-full h-full object-cover">

    <div
        class="absolute inset-0"
        style="background: linear-gradient(
            to bottom,
            rgba(255,255,255,0.55) 0%,
            rgba(255,255,255,0.15) 20%,
            rgba(0,0,0,0.25) 70%,
            rgba(0,0,0,0.35) 100%
        );">
    </div>

    <div class="relative z-10 flex items-center justify-center h-full">
        <h1 id="judul" class="text-white text-4xl md:text-6xl font-['Playfair_Display'] tracking-wide">
            Blog
        </h1>
    </div>
</section>

{{-- BLOG CONTENT --}}
<div class="w-full max-w-6xl mx-auto py-12 px-4 md:px-0">
    <div
        class="flex flex-col md:flex-row gap-10 mt-10"
        x-data="blogPagination()"
        x-init="init()">
        {{-- LEFT CONTENT --}}
        <div class="w-full md:w-8/12 space-y-12">

            {{-- Artikel --}}
            <template x-for="post in currentPagePosts()" :key="post.title">
                <div class="border-b pb-10">
                    <h2 class="text-center text-base font-bold tracking-wide font-['Playfair_Display']">BLOG</h2>
                    <h3 class="text-2xl font-semibold mb-2 text-center font-['Playfair_Display']" x-text="post.title"></h3>

                    <div class="w-16 h-0.5 bg-gray-300 mx-auto my-4"></div>

                    <p class="text-sm text-gray-500 mb-6 text-center">
                        Diposting pada <span x-text="post.date"></span> oleh Menara Bekasi
                    </p>

                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="w-full md:w-5/12 relative">
                            <div class="w-full h-48 md:h-56 overflow-hidden rounded">
                                <img :src="post.image" class="w-full h-full object-cover">
                            </div>

                            <div class="absolute inset-0 bg-black/30"></div>

                            <div class="absolute left-3 top-3 flex flex-col items-center">
                                <span class="block w-px h-6 bg-white/70"></span>
                                <p class="text-3xl font-bold text-white leading-none mt-1" x-text="post.day"></p>
                                <p class="text-xs uppercase tracking-wide text-white mt-0.5" x-text="post.month"></p>
                                <span class="block w-px h-6 bg-white/70 mt-1"></span>
                            </div>
                        </div>

                        <div class="w-full md:w-7/12">
                            <p class="text-gray-600 leading-relaxed" x-text="post.excerpt"></p>

                            <a :href="post.link" target="_blank" rel="noopener noreferrer" class="inline-block mt-4">
                                <button class="px-6 py-2 border rounded hover:bg-gray-100 transition cursor-pointer">
                                    Lanjutkan Membaca →
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </template>

            {{-- PAGINATION --}}
            <div class="mt-10 flex items-center justify-between text-sm text-gray-600">
                {{-- Info --}}
                <p>
                    Showing
                    <span x-text="(currentPage - 1) * perPage + 1"></span>
                    to
                    <span x-text="Math.min(currentPage * perPage, posts.length)"></span>
                    of
                    <span x-text="posts.length"></span>
                    results
                </p>

                {{-- Tombol --}}
                <div class="flex items-center gap-1">
                    {{-- Prev --}}
                    <button
                        @click="prevPage()"
                        :disabled="currentPage === 1"
                        :class="currentPage === 1 ? 'opacity-40 cursor-not-allowed' : 'hover:bg-gray-100 cursor-pointer'"
                        class="w-8 h-8 flex items-center justify-center rounded border transition">
                        &lt;
                    </button>

                    {{-- Nomor halaman --}}
                    <template x-for="page in totalPages" :key="page">
                        <button
                            @click="goToPage(page)"
                            :class="currentPage === page
                                ? 'bg-gray-800 text-white border-gray-800'
                                : 'hover:bg-gray-100'"
                            class="w-8 h-8 flex items-center justify-center rounded border transition"
                            x-text="page">
                        </button>
                    </template>

                    {{-- Next --}}
                    <button
                        @click="nextPage()"
                        :disabled="currentPage === totalPages"
                        :class="currentPage === totalPages ? 'opacity-40 cursor-not-allowed' : 'hover:bg-gray-100 cursor-pointer'"
                        class="w-8 h-8 flex items-center justify-center rounded border transition">
                        &gt;
                    </button>
                </div>
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

{{-- DATA POSTS DARI PHP → JS --}}
<script>
    function blogPagination() {
        return {
            posts: @json($posts),
            currentPage: 1,
            perPage: 4,
            totalPages: 0,

            init() {
                this.totalPages = Math.ceil(this.posts.length / this.perPage);
            },

            currentPagePosts() {
                const start = (this.currentPage - 1) * this.perPage;
                return this.posts.slice(start, start + this.perPage);
            },

            goToPage(page) {
                this.currentPage = page;
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            },

            prevPage() {
                if (this.currentPage > 1) this.goToPage(this.currentPage - 1);
            },

            nextPage() {
                if (this.currentPage < this.totalPages) this.goToPage(this.currentPage + 1);
            },
        };
    }
</script>

@endsection
@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('images/produk-hero.jpeg') }}"
        alt="Produk Hero"
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
            Produk
        </h1>
    </div>
</section>

<section x-data="productDetail()" class="py-20">
    <div class="container mx-auto px-4">
        {{-- HEADER --}}
        <div class="mb-14">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 font-['Playfair_Display'] md:pl-4">
                    Beberapa Produk Terlaris
                </h2>

                <p class="text-gray-600 mt-3 md:mt-0 max-w-lg md:text-right md:pr-4">
                    Produk berkualitas yang diproduksi dengan standar terbaik untuk memenuhi kebutuhan industri Anda.
                </p>
            </div>
        </div>

        {{-- GRID PRODUK --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            {{-- ITEM 1 --}}
            <div class="cursor-pointer"
                @click="showDetail({
                    id: 1,
                    title: 'Pallet Kayu',
                    desc: `Pallet kayu kami dibuat dari berbagai jenis kayu dan plywood ...`,
                    images: [
                        '{{ asset('images/produk/pallet-kayu-3d.png') }}',
                        '{{ asset('images/produk/kotak-kayu-3d.png') }}',
                        '{{ asset('images/produk/pallet-3.jpeg') }}'
                    ]
                })">

                <div :class="activeId === 1 ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]' : 'bg-white shadow-sm'"
                    class="rounded-xl border transition p-6 group">

                    <img src="{{ asset('images/produk/pallet-kayu-3d.png') }}"
                        class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">

                    <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']">Pallet Kayu</h3>

                    <p class="mt-2 text-sm"
                        :class="activeId === 1 ? 'text-gray-900 font-medium' : 'text-gray-600'">
                        <span x-text="activeId === 1 ? 'Pallet Kayu untuk ekspor.' : 'Pallet standar ISPM 15.'"></span>
                    </p>
                </div>
            </div>

            {{-- ITEM 2 --}}
            <div class="cursor-pointer"
                @click="showDetail({
                    id: 2,
                    title: 'Kotak Kayu',
                    desc: `Kotak kayu kuat untuk penyimpanan dan pengiriman barang ...`,
                    images: [
                        '{{ asset('images/produk/kotak-kayu-3d.png') }}',
                        '{{ asset('images/produk/kotak-2.jpeg') }}'
                    ]
                })">

                <div :class="activeId === 2 ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]' : 'bg-white shadow-sm'"
                    class="rounded-xl border transition p-6 group">

                    <img src="{{ asset('images/produk/kotak-kayu-3d.png') }}"
                        class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">

                    <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']">Kotak Kayu</h3>

                    <p class="mt-2 text-sm"
                        :class="activeId === 2 ? 'text-gray-900 font-medium' : 'text-gray-600'">
                        <span x-text="activeId === 2 ? 'Kotak Kayu kokoh & aman.' : 'Pengemasan kayu kokoh & aman.'"></span>
                    </p>
                </div>
            </div>

            {{-- ITEM 3 --}}
            <div class="cursor-pointer"
                @click="showDetail({
                    id: 3,
                    title: 'Triplek Kayu',
                    desc: `Triplek halus, kuat, ringan, cocok untuk ekspedisi ...`,
                    images: [
                        '{{ asset('images/produk/triplek-3d.png') }}',
                        '{{ asset('images/produk/triplek-2.jpeg') }}'
                    ]
                })">

                <div :class="activeId === 3 ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]' : 'bg-white shadow-sm'"
                    class="rounded-xl border transition p-6 group">

                    <img src="{{ asset('images/produk/triplek-3d.png') }}"
                        class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">

                    <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']">Triplek Kayu</h3>

                    <p class="mt-2 text-sm"
                        :class="activeId === 3 ? 'text-gray-900 font-medium' : 'text-gray-600'">
                        <span x-text="activeId === 3 ? 'Triplek Kayu tekstur halus.' : 'Triplek berkualitas tinggi.'"></span>
                    </p>
                </div>
            </div>
        </div>

        {{-- DETAIL PRODUK + SWIPER --}}
        <div x-show="active" x-transition class="mt-16 bg-white rounded-xl shadow-md p-8 border border-gray-200">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                {{-- SWIPER --}}
                <div>

                    <div class="swiper product-swiper" x-ref="mySwiper">
                        <div class="swiper-wrapper">
                            <template x-for="img in active.images" :key="img">
                                <div class="swiper-slide">
                                    <img :src="img" class="w-full h-80 object-contain rounded-lg shadow-sm">
                                </div>
                            </template>
                        </div>

                        <!-- NAVIGASI DENGAN IKON -->
                        <div x-ref="prevBtn" class="swiper-button-prev !text-gray-700"></div>
                        <div x-ref="nextBtn" class="swiper-button-next !text-gray-700"></div>
                    </div>

                    <!-- THUMBNAILS -->
                    <div class="flex gap-3 mt-4">
                        <template x-for="(t, i) in active.images">
                            <img :src="t"
                                @click="goTo(i)"
                                class="w-20 h-20 object-cover cursor-pointer rounded-lg border hover:scale-105 transition">
                        </template>
                    </div>


                </div>

                {{-- TEXT --}}
                <div>
                    <h3 class="text-3xl font-semibold font-['Playfair_Display'] mb-4"
                        x-text="active.title"></h3>

                    <p class="text-gray-700 leading-relaxed mb-6" x-text="active.desc"></p>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
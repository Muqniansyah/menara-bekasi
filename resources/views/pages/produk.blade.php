@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <img
        src="{{ img('images/produk-hero.jpeg') }}"
        alt="Produk Hero"
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
            Produk
        </h1>
    </div>
</section>

{{-- DATA PRODUK — di-define di sini supaya tidak konflik quote di dalam @click --}}
<script>
    window.dataProduk = [{
            id: 1,
            title: 'Pallet Kayu',
            desc: 'Pallet kayu produksi kami terbuat dari berbagai macam jenis kayu dan plywood dengan berbagai macam ukuran dan sfesifikasi sesuai kebutuhan customer dengan beban muali 100 Kg sampai dengan 2500 Kg.',
            thumb: '{{ img("images/produk/pallet-kayu-3d.png") }}',
            images: [
                '{{ img("images/produk/pallet-kayu.jpg") }}',
                '{{ img("images/produk/pallet-kayu-2.jpeg") }}'
            ]
        },
        {
            id: 2,
            title: 'Kotak Kayu',
            desc: 'Kotak kayu adalah wadah terbuat dari kayu yang berguna untuk penyimpanan atau pengiriman barang. Kekuatan kotak kayu dinilai berdasarkan berat yang dapat ditampung sebelum tutup (atas, ujung, dan samping) dipasang. Performa kotak kayu sangat dipengaruhi oleh desain spesifiknya, jenis kayu yang digunakan, jenis pengencang (seperti paku), dan juga proses pengerjaannya.',
            thumb: '{{ img("images/produk/kotak-kayu-3d.png") }}',
            images: [
                '{{ img("images/produk/kotak-kayu.jpg") }}',
                '{{ img("images/produk/kotak-kayu-2.jpg") }}'
            ]
        },
        {
            id: 3,
            title: 'Triplek Kayu',
            desc: 'Palet plywood/triplek memiliki banyak kemiripan karakteristik dengan pallet kayu. Plywood/triplek cukup kuat, ringan, dan cocok untuk ekspedisi dan transportasi. Selain itu, plywood/triplek memiliki permukaan yang bersih dan tekstur yang halus.',
            thumb: '{{ img("images/produk/triplek-3d.png") }}',
            images: [
                '{{ img("images/produk/triplek.jpg") }}',
                '{{ img("images/produk/triplek-2.jpg") }}'
            ]
        },
        {
            id: 4,
            title: 'Balok Kayu',
            desc: 'Balok kayu merupakan material kayu solid yang sangat kuat dan kokoh sehingga cocok digunakan untuk berbagai kebutuhan konstruksi, furnitur, rangka, maupun penyangga. Balok kayu memiliki daya tahan tinggi, stabil, dan mampu menahan beban berat sehingga aman untuk kebutuhan industri maupun proyek besar.',
            thumb: '{{ img("images/produk/balok-kayu-3d.png") }}',
            images: [
                '{{ img("images/produk/balok-kayu.jpg") }}',
                '{{ img("images/produk/balok-kayu-2.jpg") }}',
                '{{ img("images/produk/balok-kayu-3.jpg") }}'
            ]
        }
    ];
</script>

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
                    <i class="inline md:hidden text-blue-600 underline underline-offset-4 decoration-dashed italic animate-pulse">
                        Pilih Produk untuk melihat detail dari produk.
                    </i>
                </p>
            </div>
        </div>

        {{-- GRID PRODUK — di-render dari window.dataProduk via Alpine x-for --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <template x-for="produk in produkList" :key="produk.id">
                <div class="cursor-pointer" @click="showDetail(produk)">
                    <div :class="activeId === produk.id ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]' : 'bg-white shadow-sm'"
                        class="rounded-xl border transition p-6 group">
                        <img :src="produk.thumb"
                            class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">
                        <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']" x-text="produk.title"></h3>
                        <p class="mt-2 text-sm" :class="activeId === produk.id ? 'text-gray-900 font-medium' : 'text-gray-600'">
                            <span x-text="activeId === produk.id ? produk.title + ' dipilih.' : produk.title + ' — klik untuk detail.'"></span>
                        </p>
                    </div>
                </div>
            </template>
        </div>

        {{-- DETAIL PRODUK + SWIPER --}}
        <div x-show="active.id" x-transition class="mt-16 bg-white rounded-xl shadow-md p-8 border border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                {{-- SWIPER --}}
                <div class="w-full max-w-[540px] mx-auto md:mx-0">
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="swiper product-swiper" x-ref="mySwiper">
                            <div class="swiper-wrapper">
                                {{-- slides di-inject oleh initSwiper() di app.js --}}
                            </div>
                        </div>

                        {{-- PREV BUTTON --}}
                        <div x-ref="prevBtn"
                            class="product-prev absolute left-3 top-1/2 -translate-y-1/2 z-10
                                w-10 h-10 flex items-center justify-center rounded-full
                                bg-white shadow-md border border-gray-200
                                hover:bg-gray-100 cursor-pointer transition">
                            <span class="text-xl font-bold">&lt;</span>
                        </div>

                        {{-- NEXT BUTTON --}}
                        <div x-ref="nextBtn"
                            class="product-next absolute right-3 top-1/2 -translate-y-1/2 z-10
                                w-10 h-10 flex items-center justify-center rounded-full
                                bg-white shadow-md border border-gray-200
                                hover:bg-gray-100 cursor-pointer transition">
                            <span class="text-xl font-bold">&gt;</span>
                        </div>
                    </div>

                    {{-- THUMBNAILS --}}
                    <div class="flex gap-4 mt-5">
                        <template x-for="(t, i) in active.images" :key="t">
                            <img :src="t"
                                @click="goTo(i)"
                                :class="[
                                    'w-20 h-20 rounded-xl object-cover cursor-pointer transition-all duration-300',
                                    swiper && swiper.realIndex === i
                                        ? 'scale-110 ring-2 ring-blue-500 shadow-lg'
                                        : 'opacity-90 hover:scale-105 hover:shadow-md'
                                ]">
                        </template>
                    </div>
                </div>

                {{-- TEXT --}}
                <div>
                    <h3 class="text-3xl font-semibold font-['Playfair_Display'] mb-4"
                        x-text="active.title"></h3>
                    <p class="text-gray-700 leading-relaxed mb-6" x-text="active.desc"></p>

                    {{-- BUTTON SHARE --}}
                    <div class="flex gap-4 mt-6">
                        {{-- WHATSAPP --}}
                        <button @click="shareWA()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="message-circle"></i>
                            <span class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
                                Bagikan di WhatsApp
                                <span class="absolute left-1/2 -translate-x-1/2 top-full border-8 border-transparent border-t-black"></span>
                            </span>
                        </button>

                        {{-- FACEBOOK --}}
                        <button @click="shareFB()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="facebook"></i>
                            <span class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
                                Bagikan di Facebook
                                <span class="absolute left-1/2 -translate-x-1/2 top-full border-8 border-transparent border-t-black"></span>
                            </span>
                        </button>

                        {{-- COPY --}}
                        <button @click="copyLink()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-gray-700 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="copy"></i>
                            <span class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
                                Salin Tautan
                                <span class="absolute left-1/2 -translate-x-1/2 top-full border-8 border-transparent border-t-black"></span>
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
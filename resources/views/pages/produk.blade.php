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
        <h1 class="text-white text-4xl md:text-6xl font-['Playfair_Display'] tracking-wide">
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
        <div id="produk-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            {{-- ITEM 1 --}}
            <div class="cursor-pointer"
                @click="showDetail({
                    id: 1,
                    title: 'Pallet Kayu',
                    desc: `Pallet kayu produksi kami terbuat dari berbagai macam jenis kayu dan plywood dengan berbagai 
                    macam ukuran dan sfesifikasi sesuai kebutuhan customer dengan beban muali 100 Kg sampai dengan 2500 Kg.`,
                    img: `{{ asset('images/produk/pallet-kayu-3d.png') }}`
                })">

                <div
                    :class="activeId === 1
                        ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]'
                        : 'bg-white shadow-sm'"
                    class="rounded-xl border transition p-6 group">

                    <img src="{{ asset('images/produk/pallet-kayu-3d.png') }}"
                        class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">

                    <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']">Pallet Kayu</h3>

                    <p class="mt-2 text-sm"
                        :class="activeId === 1 ? 'text-gray-900 font-medium' : 'text-gray-600'">
                        <span x-text="activeId === 1 ? 'Pallet Kayu untuk kebutuhan ekspor.' : 'Pallet standar ekspor ISPM 15.'"></span>
                    </p>
                </div>
            </div>

            {{-- ITEM 2 --}}
            <div class="cursor-pointer"
                @click="showDetail({
                    id: 2,
                    title: 'Kotak Kayu',
                    desc: `Kotak kayu adalah wadah terbuat dari kayu yang berguna untuk penyimpanan atau pengiriman barang. 
                    Kekuatan kotak kayu dinilai berdasarkan berat yang dapat ditampung sebelum tutup (atas, ujung, dan samping) dipasang. 
                    Performa kotak kayu sangat dipengaruhi oleh desain spesifiknya, jenis kayu yang digunakan, 
                    jenis pengencang (seperti paku), dan juga proses pengerjaannya. 
                    Jangan ragu untuk menghubungi kami guna mendiskusikan spesifikasi dan kebutuhan palet Anda secara lebih detail.`,
                    img: `{{ asset('images/produk/kotak-kayu-3d.png') }}`
                })">

                <div
                    :class="activeId === 2
                        ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]'
                        : 'bg-white shadow-sm'"
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
                    desc: `Palet plywood/triplek memiliki banyak kemiripan karakteristik dengan pallet kayu. 
                    Plywood/triplek cukup kuat, ringan, dan cocok untuk ekspedisi dan transportasi. Selain itu, 
                    plywood/triplek memiliki permukaan yang bersih dan tekstur yang halus.`,
                    img: `{{ asset('images/produk/Triplek-3d.png') }}`
                })">

                <div
                    :class="activeId === 3
                        ? 'bg-blue-50 border-blue-600 shadow-xl scale-[1.03]'
                        : 'bg-white shadow-sm'"
                    class="rounded-xl border transition p-6 group">

                    <img src="{{ asset('images/produk/Triplek-3d.png') }}"
                        class="w-full h-56 object-contain mb-6 group-hover:scale-105 transition">

                    <h3 class="text-xl font-semibold text-gray-900 font-['Playfair_Display']">Triplek Kayu</h3>

                    <p class="mt-2 text-sm"
                        :class="activeId === 3 ? 'text-gray-900 font-medium' : 'text-gray-600'">
                        <span x-text="activeId === 3 ? 'Triplek Kayu bertekstur halus.' : 'Triplek halus berkualitas tinggi.'"></span>
                    </p>
                </div>
            </div>
        </div>

        {{-- DETAIL PRODUK --}}
        <div x-show="active" x-transition
            class="mt-16 bg-white rounded-xl shadow-md p-8 border border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <img :src="active.img" class="w-full h-80 object-contain">
                </div>

                <div>
                    <h3 class="text-3xl font-semibold font-['Playfair_Display'] mb-4" x-text="active.title"></h3>
                    <p class="text-gray-700 leading-relaxed mb-6" x-text="active.desc"></p>

                    <div class="flex gap-4">
                        {{-- WHATSAPP --}}
                        <button @click="shareWA()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="message-circle"></i>

                            <!-- Tooltip -->
                            <span
                                class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
                                Bagikan di WhatsApp
                                <span class="absolute left-1/2 -translate-x-1/2 top-full border-8 border-transparent border-t-black"></span>
                            </span>
                        </button>

                        {{-- FACEBOOK --}}
                        <button @click="shareFB()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="facebook"></i>

                            <!-- Tooltip -->
                            <span
                                class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
                                Bagikan di Facebook
                                <span class="absolute left-1/2 -translate-x-1/2 top-full border-8 border-transparent border-t-black"></span>
                            </span>
                        </button>

                        {{-- COPY --}}
                        <button @click="copyLink()"
                            class="relative group flex items-center gap-2 px-5 py-2 bg-gray-700 text-white rounded-lg cursor-pointer hover:brightness-110 hover:shadow-md hover:scale-[1.03] transition duration-300">
                            <i data-feather="copy"></i>

                            <!-- Tooltip -->
                            <span
                                class="absolute left-1/2 -translate-x-1/2 -top-10 opacity-0 group-hover:opacity-100 bg-black text-white text-sm px-3 py-1 rounded shadow-md transition duration-300 whitespace-nowrap">
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
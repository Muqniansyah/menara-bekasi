<section class="py-16 bg-[#F5E7C6]">
    <div class="container mx-auto px-4">
        <!-- Header (Judul di kanan) -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12">
            <div></div> <!-- ruang kosong kiri -->

            <div class="max-w-lg text-left md:text-right">
                <h2 class="text-3xl md:text-4xl font-bold font-['Playfair_Display']">
                    Produk Unggulan.
                </h2>
                <p class="text-gray-500 mt-3">
                    Pilihan produk berkualitas yang diproduksi dengan standar internasional untuk menunjang kebutuhan ekspor & industri.
                </p>
            </div>
        </div>

        <!-- Produk Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Item 1 -->
            <div class="group" data-aos="flip-left">
                <div class="relative overflow-hidden rounded-sm shadow bg-white">
                    <img
                        src="{{ img('images/produk/pallet-kayu-3d.png') }}"
                        alt="pallet-kayu"
                        class="w-full h-80 object-contain -translate-y-6
                               group-hover:scale-105 transition duration-500">

                    <div class="absolute left-4 right-4 bottom-4 
                                bg-white/90 px-5 py-4 rounded-md shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 font-['Playfair_Display']">
                            Pallet Kayu
                        </h3>
                        <p class="text-sm text-gray-600">
                            Standar ISPM 15 – Kuat & Berkualitas
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group" data-aos="flip-up">
                <div class="relative overflow-hidden rounded-sm shadow bg-white">
                    <img
                        src="{{ img('images/produk/kotak-kayu-3d.png') }}"
                        alt="kotak-kayu"
                        class="w-full h-80 object-contain -translate-y-6 
                               group-hover:scale-105 transition duration-500">

                    <div class="absolute left-4 right-4 bottom-4 
                                bg-white/90 px-5 py-4 rounded-md shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 font-['Playfair_Display']">
                            Kotak Kayu
                        </h3>
                        <p class="text-sm text-gray-600">
                            Kotak Kayu Pengencang Kuat & Aman
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group" data-aos="flip-right">
                <div class="relative overflow-hidden rounded-sm shadow bg-white">
                    <img
                        src="{{ img('images/produk/triplek-3d.png') }}"
                        alt="triplek-kayu"
                        class="w-full h-80 object-contain -translate-y-6
                               group-hover:scale-105 transition duration-500">

                    <div class="absolute left-4 right-4 bottom-4 
                                bg-white/90 px-5 py-4 rounded-md shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 font-['Playfair_Display']">
                            Triplek Kayu
                        </h3>
                        <p class="text-sm text-gray-600">
                            Permukaan yang bersih & tekstur yang halus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
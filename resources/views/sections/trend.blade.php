<section class="bg-[#F9F8F6] py-14">
    <div class="max-w-7xl mx-auto px-4">
        {{-- HEADER --}}
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 font-['Playfair_Display']">
                Tren Terkini
            </h2>
            <a href="/blog" class="relative text-gray-800 font-medium group transition">
                Lihat Semua
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gray-800 group-hover:w-full transition-all duration-300"></span>
            </a>
        </div>

        {{-- SWIPER WRAPPER DENGAN TOMBOL DI LUAR --}}
        <div class="relative">

            {{-- PREV --}}
            <div class="swiper-btn-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10
                w-9 h-9 flex items-center justify-center rounded-full
                bg-gray-700 text-white shadow-md cursor-pointer hover:bg-gray-900 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </div>

            {{-- SWIPER CONTAINER --}}
            <div class="swiper recentSwiper overflow-hidden">
                <div class="swiper-wrapper">

                    {{-- ITEM 1 --}}
                    <div class="swiper-slide">
                        <a href="https://menarabekasilestari.site/" target="_blank" rel="noopener noreferrer"
                            class="block bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="{{ img('images/trend/kemas.png') }}" class="w-full h-52 object-cover" alt="Kemas">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 font-['Playfair_Display'] text-center">
                                    Vendor Terpercaya Lainnya dari Ekspor Kayu
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed text-center">
                                    Kami selalu memastikan kualitas kayu sesuai standar internasional.
                                </p>
                            </div>
                        </a>
                    </div>

                    {{-- ITEM 2 --}}
                    <div class="swiper-slide">
                        <a href="https://kemaskayuindonesia.my.id/" target="_blank" rel="noopener noreferrer"
                            class="block bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="{{ img('images/trend/blog-kemas.jpeg') }}" class="w-full h-52 object-cover" alt="blog-kemas">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 font-['Playfair_Display'] text-center">
                                    Ekspor bisa ditolak hanya karena kemasan kayu tidak sesuai standar ISPM #15!
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed text-center">
                                    Jangan biarkan bisnis Anda rugi ratusan juta hanya karena detail kecil yang luput diperhatikan.
                                </p>
                            </div>
                        </a>
                    </div>

                    {{-- ITEM 3 --}}
                    <div class="swiper-slide">
                        <a href="https://kemaskayuindonesia.my.id/menarabekasi/" target="_blank" rel="noopener noreferrer"
                            class="block bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="{{ img('images/trend/menarabekasi.png') }}" class="w-full h-52 object-cover" alt="blog-menara">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 font-['Playfair_Display'] text-center">
                                    Pastikan Pallet Anda Siap Kirim Tanpa Risiko!
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed text-center">
                                    Kerjasama hanya dengan vendor terpercaya & berpengalaman.
                                </p>
                            </div>
                        </a>
                    </div>

                    {{-- ITEM 4 --}}
                    <div class="swiper-slide">
                        <a href="https://blogwebmenara.vercel.app/" target="_blank" rel="noopener noreferrer"
                            class="block bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="{{ img('images/trend/web-9.jpg') }}" class="w-full h-52 object-cover" alt="blogmenarabekasi">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 font-['Playfair_Display'] text-center">
                                    Pembuatan Pallet Kayu Ekspor: Proses dan Standar ISPM 15
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed text-center">
                                    Lihat bagaimana proses pengolahan kayu menjadi pallet ekspor yang memenuhi regulasi.
                                </p>
                            </div>
                        </a>
                    </div>

                    {{-- ITEM 5 --}}
                    <div class="swiper-slide">
                        <a href="https://web-menarabks.vercel.app/" target="_blank" rel="noopener noreferrer"
                            class="block bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="{{ img('images/trend/web-11.jpg') }}" class="w-full h-52 object-cover" alt="blogmenarabekasi">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 font-['Playfair_Display'] text-center">
                                    Mengenal Kayu Ramah Lingkungan dan Sertifikasi Hijau
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed text-center">
                                    Ketahui cara mendukung ekspor hijau melalui penggunaan kayu ramah lingkungan.
                                </p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            {{-- NEXT --}}
            <div class="swiper-btn-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10
                w-9 h-9 flex items-center justify-center rounded-full
                bg-gray-700 text-white shadow-md cursor-pointer hover:bg-gray-900 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>

        </div>
    </div>
</section>
<footer class="bg-[#1A1A1A] text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

        <!-- LOGO + DESKRIPSI -->
        <div>
            <img src="{{ asset('images/logo.png') }}" class="w-16 mb-4 rounded-[50%]">
            <p class="text-sm text-white/80 font-['Inter'] leading-relaxed">
                Penyedia kayu berkualitas tinggi dengan proses terstandarisasi untuk kebutuhan industri maupun kebutuhan ekspor.
            </p>
        </div>

        <!-- LOKASI + KONTAK -->
        <div>
            <h3 class="text-lg font-semibold mb-4 font-['Inter']">Lokasi & Kontak</h3>

            <p class="text-sm text-white/80 font-['Inter'] leading-relaxed mb-4">
                Cimuning, Kota Bekasi<br>
                Provinsi Jawa Barat<br>
                Indonesia
            </p>

            <p class="text-sm text-white/80 font-['Inter'] mb-2">
                Email:
                <a href="mailto:sales@menarabekasilestari.com" class="hover:text-[#C8A27A] transition">
                    sales@menarabekasilestari.com
                </a>
            </p>

            <p class="text-sm text-white/80 font-['Inter']">
                Telp:
                <a
                    href="https://wa.me/6285817298071"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hover:text-[#C8A27A] transition">
                    +62 858-1729-8071
                </a>
            </p>
        </div>

        <!-- BLOG EKSPOR KAYU & ISPM15 -->
        <div>
            <h3 class="text-lg font-semibold mb-4 font-['Inter']">Blog & Artikel</h3>
            <ul class="space-y-2 text-sm font-['Inter']">

                <li>
                    <a href="https://blogmenara.pages.dev/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-[#C8A27A] transition">
                        Apa Itu ISPM 15?
                    </a>
                </li>

                <li>
                    <a href="https://menarabekasi-bbeb1.web.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-[#C8A27A] transition">
                        Panduan Ekspor Kayu
                    </a>
                </li>

                <li>
                    <a href="https://menaraweb.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-[#C8A27A] transition">
                        Syarat & Sertifikasi Kayu Ekspor
                    </a>
                </li>

                <li>
                    <a href="https://muqniansyah.codeberg.page/bekasimenara/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-[#C8A27A] transition">
                        Standar Pallet Ekspor
                    </a>
                </li>

            </ul>
        </div>

        <!-- ⭐ NAVIGASI (DITAMBAHKAN TANPA MERUBAH YANG LAIN) -->
        <div>
            <h3 class="text-lg font-semibold mb-4 font-['Inter']">Navigasi</h3>
            <ul class="space-y-2 text-sm font-['Inter']">
                <li><a href="/" class="hover:text-[#C8A27A] transition">Beranda</a></li>
                <li><a href="/tentang" class="hover:text-[#C8A27A] transition">Tentang</a></li>
                <li><a href="/blog" class="hover:text-[#C8A27A] transition">Blog</a></li>
                <li><a href="/produk" class="hover:text-[#C8A27A] transition">Produk</a></li>
                <li><a href="/kontak" class="hover:text-[#C8A27A] transition">Kontak</a></li>
            </ul>
        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="mt-12 pt-6 md:px-28 px-6 flex flex-col md:flex-row justify-between items-center text-sm text-white/60 font-['Inter']">
        <!-- Kiri -->
        <div>
            © {{ date('Y') }} PT Menara Bekasi. Semua hak dilindungi.
        </div>

        <!-- Kanan -->
        <div class="mt-2 md:mt-0">
            Design & Develop oleh
            <a
                href="https://muqniansyah.github.io/"
                target="_blank"
                rel="noopener noreferrer"
                class="text-white font-semibold hover:text-[#C8A27A] hover:underline transition-all duration-300">
                Muqniansyah
            </a>
        </div>
    </div>
</footer>
<nav class="w-full bg-white shadow-sm fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-start gap-10">

        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </a>

        <!-- Navigation -->
        <div class="flex items-center gap-6 text-gray-700 font-medium">
            <a href="/" class="hover:text-black transition">Beranda</a>
            <a href="/tentang-kami" class="hover:text-black transition">Tentang</a>
            <a href="/blog" class="hover:text-black transition">Blog</a>
            <a href="/produk" class="hover:text-black transition">Produk</a>
            <a href="/kontak" class="hover:text-black transition">Kontak</a>
        </div>

        <!-- Login Button -->
        <a href="/login"
            class="ml-auto px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
            Login
        </a>
    </div>
</nav>
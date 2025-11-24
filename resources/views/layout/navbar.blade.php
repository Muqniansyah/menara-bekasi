<nav id="navbar" class="fixed top-0 left-0 w-full z-50 flex items-center justify-between px-8 py-6 transition-all duration-300">

    <!-- Empty (biar logo tetap center) -->
    <div class="w-8"></div>

    <!-- Hamburger Button -->
    <button id="menuBtn" class="text-3xl font-light z-[1000] cursor-pointer">
        ☰
    </button>
</nav>

<!-- FULLSCREEN MENU OVERLAY -->
<div id="menuOverlay"
    class="fixed inset-0 bg-white z-[999] translate-y-[100vh] transition-transform duration-500 flex flex-col items-center pt-24">

    <!-- Close Button -->
    <button id="closeBtn" class="absolute top-8 right-8 text-4xl font-light z-[1001] cursor-pointer">
        ×
    </button>

    <!-- Logo -->
    <img src="{{ asset('images/logo.png') }}" class="w-16 mb-10">

    <!-- MENU LIST -->
    <div class="flex flex-col items-center space-y-8">

        @php
        $menus = [
        ['title' => 'BERANDA', 'url' => '/'],
        ['title' => 'TENTANG', 'url' => '/tentang'],
        ['title' => 'BLOG', 'url' => '/blog'],
        ['title' => 'PRODUK', 'url' => '/produk'],
        ['title' => 'KONTAK', 'url' => '/kontak'],
        ];
        @endphp

        @foreach ($menus as $menu)
        <a href="{{ $menu['url'] }}"
            class="text-2xl tracking-widest relative group">
            {{ $menu['title'] }}

            <!-- garis hover -->
            <span
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[1px] bg-yellow-600 transition-all duration-300 group-hover:w-full">
            </span>
        </a>
        @endforeach
    </div>
</div>
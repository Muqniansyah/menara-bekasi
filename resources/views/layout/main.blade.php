<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Judul -->
    <title>PT. Menara Bekasi – Produsen Pallet Kayu & Sertifikasi ISPM 15</title>

    <!-- META DESCRIPTION -->
    <meta name="description" content="PT. Menara Bekasi adalah perusahaan resmi terdaftar ID-139 penyedia pallet kayu, dunnage, peti kayu, dan layanan sertifikasi ISPM 15 berstandar internasional untuk kebutuhan ekspor." />

    <!-- CANONICAL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- GSC -->
    <meta name="google-site-verification" content="5QAYWNPCrfnMCcRo-tEkUuPYI1iv802CaTQl2gSufHg" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ERRJB6XMXJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ERRJB6XMXJ');
    </script>

    <!-- icon -->
    <link rel="icon" href="{{ img('images/logo.png') }}" type="image/png">

    <!-- JSON-LD Struktur Perusahaan -->
    <script type="application/ld+json">
        <?php
        echo json_encode([
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => "PT. Menara Bekasi",
            "image" => img('images/logo.png'),
            "description" => "PT. Menara Bekasi ...",
            "url" => url('/'),
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Bekasi",
                "addressRegion" => "Jawa Barat",
                "addressCountry" => "ID"
            ],
            "sameAs" => []
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        ?>
    </script>

    <!-- tailwind css -->
    @if(app()->runningInConsole())
    {{-- MODE EXPORT (STATIC) --}}
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $css = $manifest['resources/css/app.css']['file'];
    $js = $manifest['resources/js/app.js']['file'];
    @endphp

    <link rel="stylesheet" href="./build/{{ $css }}">
    <script type="module" src="./build/{{ $js }}"></script>
    @else
    {{-- MODE LARAVEL --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="{{ img('css/style.css') }}">
</head>

<body style="font-family: Inter, sans-serif;">
    @include('layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')
</body>

<!-- BUTTON WA -->
<div id="wa-button"
    class="fixed bottom-6 right-6 bg-green-600 w-14 h-14 rounded-full flex items-center justify-center cursor-pointer shadow-lg text-white"
    onclick="toggleWA()">
    <i class="bi bi-whatsapp text-3xl"></i>
</div>

<!-- POPUP WA -->
<div id="wa-popup"
    class="fixed z-20 bottom-24 right-6 w-80 bg-white rounded-xl shadow-xl p-4 hidden">

    <h3 class="text-lg font-bold mb-2">Ada yang perlu dibantu?</h3>
    <p class="text-sm text-gray-500 mb-4">Klik salah satu tim kami:</p>

    <div class="space-y-3">
        <a href="https://wa.me/6285817298071?text=Halo saya ingin menanyakan..."
            target="_blank"
            rel="noopener noreferrer"
            class="flex items-center justify-between p-3 border rounded-lg hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <i class="bi bi-whatsapp text-green-600 text-xl"></i>
                <span>Rizki Maulana</span>
            </div>
            <i class="bi bi-chevron-right"></i>
        </a>
    </div>
</div>
</body>

<script>
    function toggleWA() {
        document.getElementById('wa-popup').classList.toggle('hidden');
    }
</script>

</html>
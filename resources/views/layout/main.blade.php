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

    <!-- icon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- JSON-LD Struktur Perusahaan -->
    <script type="application/ld+json">
        <?php
        echo json_encode([
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => "PT. Menara Bekasi",
            "image" => asset('images/logo.png'),
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="font-family: Inter, sans-serif;">
    @include('layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')
</body>

</html>
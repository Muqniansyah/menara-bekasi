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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/69328d0fbfea881983583ef3/1jbmne1rh';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

</html>
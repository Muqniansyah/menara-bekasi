@extends('layout.main')

@section('content')
{{-- HERO SECTION / JUMBOTRON --}}
<section class="relative w-full h-[45vh] md:h-[55vh] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('images/kontak-hero.jpeg') }}"
        alt="Kontak Hero"
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
            Kontak
        </h1>
    </div>
</section>

<div x-data="{ open: false }">

    <!-- Floating WA Button -->
    <button @click="open = !open"
        class="fixed bottom-5 right-5 bg-green-500 p-4 rounded-full text-white">
        <i data-feather="message-circle"></i>
    </button>

    <!-- Chat Box -->
    <div x-show="open"
        class="fixed bottom-20 right-5 w-72 bg-white rounded-xl shadow-lg p-4 transition">

        <div class="flex justify-between items-center">
            <p class="font-bold">Hi, How can I help you?</p>
            <button @click="open = false">✕</button>
        </div>

        <a href="https://wa.me/628123456789"
            class="mt-3 block bg-green-500 text-white p-2 rounded-lg text-center">
            Reply to Reka Furniture
        </a>
    </div>

</div>
@endsection
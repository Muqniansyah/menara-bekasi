<section
    class="min-h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-18 pt-20 md:pt-10 py-10 bg-[#F9F8F6] overflow-hidden"
    x-data="{ show: false }"
    x-init="setTimeout(() => show = true, 150)">

    <!-- Left -->
    <div
        class="w-full md:w-1/2 text-[#C8A27A] mb-12 md:mb-0"
        x-show="show"
        x-transition.opacity.duration.700ms
        x-transition.transform.origin.left
        x-transition.translate.x.20>

        <h1 class="font-['Playfair_Display'] text-4xl md:text-6xl font-semibold leading-tight mb-6">
            Export Kayu <br> Terpercaya & Internasional
        </h1>

        <p class="font-['Inter'] text-base md:text-lg opacity-90 mb-8">
            PT. Menara Bekasi menghadirkan kualitas terbaik dengan sentuhan klasik dan modern,
            menghadirkan estetika kayu yang elegan untuk setiap kebutuhan Anda.
        </p>

        <a
            href="https://wa.me/6285817298071"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-block bg-[#C8A27A] text-white px-8 py-3 rounded-xl font-['Inter'] font-medium 
            shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            Hubungi Sekarang
        </a>
    </div>

    <!-- Right image -->
    <div
        class="relative w-full md:w-1/2 flex justify-center"
        x-show="show"
        x-transition.opacity.duration.900ms
        x-transition.transform.origin.right
        x-transition.scale.90>

        <div class="blob-wrapper relative w-[260px] h-[260px] md:w-[420px] md:h-[420px]">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Header Image"
                class="w-full h-full object-cover 
                rounded-[40%_60%_70%_30%/30%_40%_60%_70%] shadow-2xl">
        </div>
    </div>

</section>
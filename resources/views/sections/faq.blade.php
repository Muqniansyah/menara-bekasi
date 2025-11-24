<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-14">
        <!-- LEFT FAQ SECTION -->
        <div>
            <h3 class="text-sm text-gray-500 uppercase tracking-wide mb-3 font-['inter']">
                Ekspor Kayu Terpercaya
            </h3>

            <h2 class="text-4xl font-semibold mb-10 leading-snug font-['Playfair_Display']">
                Hal yang perlu <br> diketahui.
            </h2>

            <div class="space-y-6">
                @foreach ($faqs as $faq)
                <div x-data="{ open:false }" class="border-b pb-4">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full">
                        <span class="text-lg font-medium text-gray-800">
                            {{ $faq['title'] }}
                        </span>

                        <span class="text-2xl leading-none text-gray-500 cursor-pointer">
                            <span x-show="!open">+</span>
                            <span x-show="open">−</span>
                        </span>
                    </button>

                    <div x-show="open" x-collapse class="mt-3 text-gray-600 text-sm leading-relaxed">
                        {{ $faq['content'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- RIGHT IMAGE COLLAGE -->
        <div class="relative h-full flex items-center justify-center">
            <!-- Image 1 -->
            <img src="{{ asset('images/faq/faq-1.jpeg') }}"
                class="absolute top-0 left-1/4 w-40 h-48 rounded-sm shadow-lg
               -translate-x-6 translate-y-4 z-1 object-cover">

            <!-- Image 2 -->
            <img src="{{ asset('images/faq/faq-2.jpeg') }}"
                class="absolute top-30 right-6 w-48 h-56 rounded-sm shadow-lg
               translate-x-4 -translate-y-4 z-2 object-cover">

            <!-- Image 3 (large bottom) -->
            <img src="{{ asset('images/faq/faq-3.jpeg') }}"
                class="absolute bottom-0 left-1/2 w-64 h-72 rounded-sm shadow-lg
               -translate-x-1/2 translate-y-6 z-3 object-cover">
        </div>
    </div>
</section>
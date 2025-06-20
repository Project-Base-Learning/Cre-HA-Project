<div class="w-full mx-auto lg:h-svh aspect-[16/9] relative">
    <div id="default-carousel" class="relative w-full h-full lg:h-svh" data-carousel="slide">

        {{-- Tagline --}}
        <div class="absolute top-0 left-0 w-full lg:h-svh overflow-hidden aspect-[16/9] z-[90] flex flex-col items-center justify-center py-6 px-[10%] text-center text-white bg-black/25">
            <h2 class="mb-2 text-3xl font-bold sm:mb-4 md:text-5xl lg:text-7xl">Welcome To {{ $data['site_name'] }}</h2>
            <p class="hidden max-w-4xl mb-4 sm:block md:text-xl lg:text-2xl">
                Creator: To Create a Work to be Realized or Introduced Haichi: translated means “Showcasing” Thus, we are a community actively facilitating creators, especially in Bali, to showcase their original works.
            </p>
            <a href="{{ route('event') }}" class="flex items-center gap-2 px-4 py-2 text-lg text-white transition-transform transform rounded-lg bg-secondary-500 hover:scale-105">
                Lihat Event
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>

        <!-- Carousel wrapper -->
        <div class="relative w-full lg:h-svh aspect-[16/9] overflow-hidden">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/home/banner1.jpg') }}" class="block object-cover w-full h-full"
                    alt="Image 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/home/banner2.jpg') }}" class="block object-cover w-full h-full"
                    alt="Image 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/home/banner3.jpg') }}" class="block object-cover w-full h-full"
                    alt="Image 3">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/home/banner4.jpg') }}" class="block object-cover w-full h-full"
                    alt="Image 4">
            </div>
        </div>

        <!-- Slider indicators (Hidden on Mobile & Tablet) -->
        <div class="absolute z-[100] hidden sm:flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
        </div>

        <!-- Slider controls -->
        <div class="hidden lg:block">
            <button type="button"
                class="absolute top-0 left-0 z-[100] flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-[100] flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>

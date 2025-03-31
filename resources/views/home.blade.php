@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="font-ranad height flex justify-center items-center">
        <h1 class="font-Ranade text-4xl font-bold">Vítejte na naší stránce!</h1>
    </div>
    <div>
    @livewire('gallery')
    </div>
     <!-- Why Choose Us Section -->
      <section class="bg">
        <div class="py-10 text-center bg-gray-100">
        <h2 class="text-3xl font-semibold">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="flex justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <div class="shadow rounded-lg max-w">
                <h3 class="text-lg font-bold">Rychlá Doprava</h3>
                <x-heroicon-o-truck height="100px" class="inline"/>
                <p class="mt-2">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="shadow rounded-lg max-w">
                <h3 class="text-lg font-bold">Kvalitní Produkty</h3>
                <x-iconsax-bro-sidebar-right height="100px" class="inline"/>
                <p class="mt-2">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="shadow rounded-lg max-w">
                <h3 class="text-lg font-bold">Zákaznická Podpora</h3>
                <x-gmdi-support-agent-o height="100px" class="inline"/>
                <p class="mt-2">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div></section>
     


    <!-- Horizontal slider -->
    @include( 'components.product-slider')

    <!-- Contact Form Section -->
    @include('components.contact-form')

@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true, // Přidá loop efekt
        });
    </script>
@endpush
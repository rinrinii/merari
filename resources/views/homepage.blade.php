@extends('layouts.app')

@section('title', 'Merari | Home')

@section('content')

<!-- HERO SECTION -->
<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-4xl font-bold mb-4">
                welcome to merari!
            </h1>

            <p class="text-gray-600 mb-6">
                handmade bracelets and accessories
            </p>

            <a href="#"
               class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800">
               SHOP NOW
            </a>
        </div>

        <div>
            <img src="{{ asset('images/hero.png') }}"
                 alt="Merari Bracelet"
                 class="rounded-lg shadow-md">
        </div>

    </div>
</section>


<!-- TAGLINE -->
<section class="bg-white text-center py-8">
    <h2 class="text-xl font-semibold">
        crafting memories with handmade accessories.
    </h2>
</section>


<!-- PRODUCT SPOTLIGHT -->
<section class="max-w-7xl mx-auto px-6 py-12">

    <h2 class="text-3xl font-bold text-center mb-10">
        Product Spotlight
    </h2>

    @php
        $products = [
            [
                'name' => 'Sanrio Pompompurin Bracelet',
                'price' => 90,
                'image' => 'images/products/productimg_1.png',
                'slug' => 'pompompurin'
            ],
            [
                'name' => 'Sanrio Cinnamoroll Bracelet',
                'price' => 90,
                'image' => 'images/products/productimg_2.png',
                'slug' => 'cinnamoroll'
            ],
            [
                'name' => 'Sanrio My Melody Bracelet',
                'price' => 90,
                'image' => 'images/products/productimg_3.png',
                'slug' => 'mymelody'
            ],
        ];
    @endphp

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($products as $product)

            <x-product-card
                :name="$product['name']"
                :price="$product['price']"
                :image="$product['image']"
                :slug="$product['slug']"
            />

        @endforeach

    </div>

</section>


<!-- CUSTOMER TESTIMONIAL -->
<section class="max-w-4xl mx-auto px-6 py-16">

    <div class="bg-white rounded-xl shadow-md p-6 relative">

        <div class="flex items-start gap-4">

            <img src="{{ asset('images/reviewer-placeholder.png') }}"
                 class="w-12 h-12 rounded-full object-cover">

            <div>
                <p class="font-semibold">Rocket Graham</p>
                <p class="text-sm text-gray-500">2026</p>
            </div>

        </div>

        <p class="mt-4 text-gray-700 leading-relaxed">
            Beautifully crafted handmade accessories with so much attention to detail.
            Each piece feels unique and high-quality! Perfect if you want something
            special and thoughtfully made.
        </p>

        <i class="bi bi-quote absolute top-4 right-6 text-gray-300 text-3xl"></i>

    </div>

</section>


<!-- BRACELET GALLERY -->
<section class="max-w-7xl mx-auto px-6 pb-16">

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <img src="{{ asset('images/gallery/gallery1.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery2.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery3.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery4.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery5.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery6.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery7.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">
        <img src="{{ asset('images/gallery/gallery8.png') }}" class="rounded-lg shadow hover:scale-105 transition duration-300">

    </div>

</section>

@endsection
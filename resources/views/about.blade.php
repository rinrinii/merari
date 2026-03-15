@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- ABOUT SECTION -->
<section class="max-w-6xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-2 gap-12 items-center bg-[#e9e4de] p-10 rounded-lg">

        <!-- IMAGE -->
        <div>
            <h1 class="text-4xl font-bold mb-10">merari.</h1>
            <img src="{{ asset('images/footer/test-image1.png') }}"
                 alt="Merari Bracelet"
                 class="rounded-lg shadow-md w-full">
        </div>

        <!-- TEXT -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Our Page.</h2>

            <p class="text-justify text-gray-600 mb-4">
                Our story starts with a shared desire to bring the magic of handmade
                creations to the world. We meticulously craft each bracelet using
                high-quality materials, ensuring every piece is not only beautiful
                but built to last.
            </p>

            <p class="text-justify text-gray-600 mb-4">
                From bold and statement-making designs to delicate everyday
                companions, our collections reflect the unique styles and
                personalities of our team.
            </p>

            <p class="text-justify text-gray-600">
                We're passionate about supporting fellow artisans and fostering
                a love for these unique treasures.
            </p>
        </div>

    </div>

</section>


<!-- MEET THE TEAM -->
<section class="max-w-6xl mx-auto px-6 pb-20">

    <div class="grid md:grid-cols-2 gap-12 items-start">

        <!-- LEFT SIDE : TEXT -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Meet the Team</h2>

            <p class="text-justify text-gray-500 max-w-md">
                Meet the paws and hearts behind our handmade accessories — a cute, fluffy dog
                driven by creativity and care. We pour passion into every detail,
                from design to finishing touches.
            </p>
        </div>


        <!-- RIGHT SIDE : TEAM CARD -->
        <div class="max-w-sm">

            <img src="{{ asset('images/ceo-cody.jpg') }}"
                alt="Team Member"
                class="rounded-xl shadow-md mb-4">

            <h3 class="font-semibold text-lg">Cody</h3>

            <p class="text-gray-500 text-sm">
                CEO, Professional Kibble Nibbler, Full-Time Doggo
            </p>

        </div>

    </div>

</section>

@endsection
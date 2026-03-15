@props(['name', 'price', 'image', 'slug'])

<a href="{{ route('product.show', ['slug' => $slug]) }}" class="block group">

    <div class="text-center transition-transform duration-300 ease-out group-hover:-translate-y-1">

        <div class="rounded-lg overflow-hidden shadow-md group-hover:shadow-xl transition-shadow duration-300">

            <img src="{{ asset($image) }}"
                 alt="{{ $name }}"
                 class="w-full h-auto group-hover:scale-105 transition-transform duration-300 ease-out">

        </div>

        <h3 class="mt-4 font-semibold">
            {{ $name }}
        </h3>

        <p class="text-gray-500">
            ₱{{ number_format($price, 2) }}
        </p>

    </div>

</a>
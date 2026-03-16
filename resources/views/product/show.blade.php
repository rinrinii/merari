@extends('layouts.app')

@section('title', $product->name)

@section('content')

<div class="max-w-6xl mx-auto px-6 py-12">

    <!-- SUCCESS NOTIFICATION -->
    @if(session('success'))
    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid md:grid-cols-2 gap-12 items-start">

        <!-- PRODUCT IMAGE -->
        <div>
            <img src="{{ asset(!empty($product->image) ? $product->image : 'images/default-product.jpg') }}"
                class="rounded-lg shadow-md w-full">
        </div>

        <!-- PRODUCT DETAILS -->
        <div>

            <h1 class="text-xl font-semibold">
                {{ $product->name }}
            </h1>

            <!-- CATEGORY -->
            <span class="inline-block mt-2 text-xs bg-green-100 text-green-700 px-2 py-1 rounded">
                {{ $product->category }}
            </span>

            <!-- PRICE -->
            <p id="displayed-price" class="text-3xl font-bold mt-3">
                ₱{{ number_format($product->variations->first()->price, 2) }}
            </p>

            <!-- ADD TO CART FORM -->
            <form method="POST" action="{{ route('cart.add') }}" class="mt-6">
                @csrf

                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <!-- OPTIONS -->
                <div class="grid grid-cols-2 gap-4">

                    <!-- VARIATION -->
                    <div>
                        <label class="block text-sm mb-1 text-gray-600">
                            Variation
                        </label>

                        <select id="variation"
                                name="variation"
                                required
                                class="w-full border rounded px-3 py-2 text-sm"
                                onchange="updatePrice()">

                            <option value="" disabled selected>
                                Choose a variation
                            </option>

                            @foreach($product->variations as $variation)

                            <option value="{{ $variation->name }}"
                                    data-price="{{ $variation->price }}">

                                {{ $variation->name }}

                            </option>

                            @endforeach

                        </select>
                    </div>

                    <!-- QUANTITY -->
                    <div>
                        <label class="block text-sm mb-1 text-gray-600">
                            Quantity
                        </label>

                        <select name="quantity"
                                required
                                class="w-full border rounded px-3 py-2 text-sm">

                            <option value="" disabled selected>
                                Choose order quantity
                            </option>

                            @for($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor

                        </select>
                    </div>

                </div>

                <!-- ADD TO CART BUTTON -->
                <button type="submit"
                    class="w-full mt-6 bg-[#0B1A33] text-white py-3 rounded-lg hover:bg-[#09142A] transition">

                    Add to Cart

                </button>

            </form>

        </div>

    </div>

</div>

<div class="border-t border-gray-200 my-12"></div>

<!-- PRODUCT DESCRIPTION -->
<div class="max-w-6xl mx-auto px-6">

    <h2 class="text-3xl font-bold mb-6">
        Product Description
    </h2>

    <p class="text-gray-600 mb-4">
        Welcome to Merari!
    </p>

    <p class="text-gray-600 mb-6">
        {{ $product->description }}
    </p>

    <p class="text-gray-600 mb-10">
        When choosing Custom Size variation, make sure to message us your
        preferred bracelet size in DMS or ORDER NOTES!
    </p>

    <div class="grid md:grid-cols-2 gap-12">

        <!-- PRODUCT INFORMATION -->
        <div>

            <h3 class="font-bold mb-3">
                Product Information
            </h3>

            <ul class="text-gray-600 text-sm space-y-2 list-disc ml-4">

                <li>The accessories are handmade.</li>

                <li>
                    When we don't have the right amount of materials,
                    there may be adjustments to the bracelet. However,
                    we will inform you first before making it.
                </li>

                <li>
                    Our bracelets are made to order.
                    Once the order is placed, then we will make the bracelet.
                </li>

                <li>
                    Please measure your wrist size before ordering.
                </li>

            </ul>

        </div>

        <!-- CARE GUIDE -->
        <div>

            <h3 class="font-semibold mb-3">
                Bracelet Care Guide
            </h3>

            <ul class="text-gray-600 text-sm space-y-2 list-disc ml-4">

                <li>
                    DO NOT leave in water for long periods of time.
                    It may result in faded colors.
                </li>

                <li>
                    DO NOT wear while doing water activity/swimming.
                </li>

            </ul>

        </div>

    </div>

</div>


<script>

function updatePrice(){

    const variation = document.getElementById("variation");
    const priceDisplay = document.getElementById("displayed-price");

    const selectedOption = variation.options[variation.selectedIndex];
    const price = selectedOption.getAttribute("data-price");

    if(price){
        priceDisplay.textContent = "₱" + parseFloat(price).toFixed(2);
    }

}

</script>

@endsection
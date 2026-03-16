@extends('layouts.app')

@section('title', 'My Cart')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-12">

    <h1 class="text-2xl font-bold mb-8">MY CART</h1>

    @if(session('success'))
    <div class="mb-6 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
    @endif


    @if(count($cart) > 0)

    <div class="space-y-6">

        @php $subtotal = 0; @endphp

        @foreach($cart as $key => $item)

            @php
            $itemTotal = $item['price'] * $item['quantity'];
            $subtotal += $itemTotal;
            @endphp


            <div class="flex items-center justify-between border p-4 rounded">

                <!-- LEFT SIDE -->
                <div class="flex items-center gap-4">

                    <img src="{{ asset($item['image']) }}"
                    class="w-20 h-20 object-cover rounded">

                    <div>

                        <p class="font-semibold">
                            {{ $item['name'] }}
                        </p>

                        <!-- VARIATION -->
                        <p class="text-sm text-gray-500">
                            Variation: {{ $item['variation'] }}
                        </p>

                        <p class="text-gray-500 text-sm">
                            ₱{{ number_format($item['price'],2) }}
                        </p>

                    </div>

                </div>


                <!-- QUANTITY -->
                <div class="flex items-center gap-2">
                    <!-- DECREASE -->
                    <form method="POST" action="{{ route('cart.update') }}">
                    @csrf

                        <input type="hidden" name="key" value="{{ $key }}">
                        <input type="hidden" name="action" value="decrease">

                        <button class="w-7 h-7 border rounded hover:bg-gray-100">
                            -
                        </button>

                    </form>

                    <!-- CURRENT QTY -->
                    <span class="w-6 text-center">
                        {{ $item['quantity'] }}
                    </span>

                    <!-- INCREASE -->
                    <form method="POST" action="{{ route('cart.update') }}">
                    @csrf

                        <input type="hidden" name="key" value="{{ $key }}">
                        <input type="hidden" name="action" value="increase">

                        <button class="w-7 h-7 border rounded hover:bg-gray-100">
                            +
                        </button>

                    </form>

                </div>

                <!-- ITEM TOTAL -->
                <div class="font-semibold">
                    ₱{{ number_format($itemTotal,2) }}
                </div>


                <!-- REMOVE BUTTON -->
                <div>

                    <form method="POST" action="{{ route('cart.remove') }}">
                    @csrf

                    <input type="hidden" name="key" value="{{ $key }}">

                    <button
                    class="text-red-500 hover:text-red-700 text-sm">
                    Remove
                    </button>

                    </form>

                </div>

            </div>
        @endforeach

    </div>

    <!-- SUBTOTAL -->
    <div class="flex justify-between items-center mt-10">

        <p class="font-semibold text-lg">
            Subtotal
        </p>

        <p class="text-xl font-bold">
            ₱{{ number_format($subtotal,2) }}
        </p>
    </div>


    <!-- CHECKOUT -->
    <div class="flex justify-end mt-6">

        <form method="POST" action="{{ route('cart.checkout') }}">
        @csrf

            <button class="bg-black text-white px-6 py-2 rounded">
                CHECKOUT
            </button>
        </form>
    </div>

    @else
    <p>Your cart is empty.</p>
    @endif

</div>

@endsection
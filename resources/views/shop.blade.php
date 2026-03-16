@extends('layouts.app')

@section('title', 'Shop')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-12">

    <h1 class="text-3xl font-bold text-center mb-10">
        Shop Catalog
    </h1>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

        @foreach($products as $product)

            <x-product-card
                :name="$product->name"
                :price="$product->base_price"
                :image="$product->image"
                :slug="$product->slug"
            />

        @endforeach

    </div>

</div>

@endsection
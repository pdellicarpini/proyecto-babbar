<?php
/**
 * @var App\Models\Product $product
 * @var Illuminate\Database\Eloquent\Collection | array $products
 */
?>

<x-main-layout>
    <x-slot:title>{{ $product->name }}</x-slot:title>

    <div class="product-details mt-5">
        <div class="product-images">
            <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="width: 20rem;">
            <img src="{{ asset('storage/images/products/' . $product->secondary_image) }}" class="card-img-top" alt="{{ $product->name }}" style="width: 20rem;">
        </div>
        <div class="product-info">     
            <p>{{ $product->category }}</p>
            <h1 class="titles">{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <div class="d-flex gap-3">
                <p><span class="fw-bold"> Aroma:</span> {{ $product->scent }}</p>
                <p><span class="fw-bold"> Color:</span> {{ $product->color }}</p>
            </div>
            <p class="fs-3 fw-bold">${{ $product->price }}</p>
            <a href="{{ route('catalog') }}" class="btn main-button">Comprar</a>
        </div> 
    </div>

    <div class="container m-5 text-center">
        <h2 class="titles m-4">Productos relacionados</h2>
        <div class="container d-flex justify-content-center gap-4">
        @foreach ($relatedProducts as $product)
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column align-items-around justify-content-between">
                    <h3 class="card-title fs-4 fw-bold text-center">{{ $product->name }}</h3>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn main-button">Ver detalles</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-main-layout>
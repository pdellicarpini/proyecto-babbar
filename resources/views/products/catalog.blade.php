<?php

/** @var Illuminate\Database\Eloquent\Collection | array $products */
?>

<x-main-layout>
    <x-slot:title>Cátalogo</x-slot:title>
    <div class="container">
        <h1 class="titles category-title">{{ request('category') ?? 'Nuestro Catálogo' }}</h1>
        <p>Encontrá todos los productos artesanales que necesitás para darle vida a tu hogar.</p>
        <div class="main-content">
            @foreach ($products as $product)
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column align-items-around justify-content-between">
                    <h2 class="card-title fs-4 fw-bold text-center">{{ $product->name }}</h2>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn main-button">Ver detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
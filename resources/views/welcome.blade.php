<?php

/** @var Illuminate\Database\Eloquent\Collection | array $products */
/** @var Illuminate\Database\Eloquent\Collection | array $posts */

?>

<x-main-layout>
    <x-slot:title>Babbar</x-slot:title>
    <section class="container banner">
        <img src="{{ asset('/storage/images/banner.png')}}" alt="Banner de Babbar" class="mb-4">
        <h1 class="visually-hidden">Babbar</h1>
        <p class="visually-hidden">Velas aromáticas y yeso artesanal</p>
    </section>
    <section class="container">
        <h2 class="titles fs-3 text-center m-4 m-auto">Productos con Vela</h2>
        <div class="main-content">
            @foreach ($products as $product)
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column align-items-around justify-content-between">
                    <h3 class="card-title fs-4 fw-bold text-center">{{ $product->name }}</h3>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn main-button delete-button">Ver detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="about">
        <div>
            <h2 class="titles fs-3 text-center">Sobre nosotros</h2>
            <p>Somos un emprendimiento familiar que se dedica a crear velas aromáticas y yeso artesanal de la más alta calidad.</p>
            <p>Nuestros productos están diseñados para transformar tu hogar en un oasis de tranquilidad y estilo. Descubre nuestra colección única y encuentra el complemento perfecto para tu espacio.</p>
        </div>
    </section>
    <section class="container">
        <h2 class="titles fs-3 text-center mb-4">Conocé nuestras entradas</h2>
        <div class="d-flex flex-wrap justify-content-between gap-3">
            @foreach ($posts as $post)
            <div class="post">
                <img src="{{ asset('/storage/images/posts/' . $post->image) }}" class="post-img" alt="{{ $post->image_alt }}">
                <div class="post-body">
                    <div class="post-content">
                        <h3 class="card-title fs-5 mb-2 fw-bold">{{ $post->title }}</h3>
                        <p class="card-text">{{ $post->preview }}</p>
                    </div>
                    <div>
                        <a href="{{ route('post.show', ['id' => $post->id]) }}" class="btn main-button mb-2">Ver entrada</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-main-layout>
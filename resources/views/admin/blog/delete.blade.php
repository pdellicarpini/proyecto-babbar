<?php

/** @var App\Models\Post $post*/

?>

<x-admin-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>

    <p class="mb-4 fs-3 fw-bold text-center delete-message">¿Seguro que desea eliminar esta entrada?</p>
    <div class="product-details">
        <div class="product-images">
            <img src="{{ asset('storage/images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->image_alt }}" style="width: 20rem;">
        </div>
        <div class="product-info">
            <p class="mb-4 post-date">Publicado el: {{ $post->created_at->format('d/m/Y') }}</p>
            <h1 class="titles"> "{{ $post->title }}"</h1>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="POST" class="mt-2 d-flex justify-content-center align-items-center">
        <button type="submit" class="btn main-button delete-button">Eliminar</button>
    </form>
</x-admin-layout>
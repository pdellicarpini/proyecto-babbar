<?php

/** @var App\Models\Post $post */

?>

<x-main-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>

    <div class="product-details mt-5">
        <div class="product-images">
            <img src="{{ asset('storage/images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->image_alt }}" style="width: 20rem;">
        </div>
        <div class="product-info">  
            <p class="mb-4 post-date">Publicado el: {{ $post->created_at->format('d/m/Y') }}</p>   
            <h1 class="titles">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </div> 
    </div>
</x-main-layout>
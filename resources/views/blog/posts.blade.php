<?php
/** @var Illuminate\Database\Eloquent\Collection | array $posts */
?>

<x-main-layout>
    <x-slot:title>Blog</x-slot:title>
    <div class="blog container">
        <h1 class="titles">Blog</h1>
        <p>Todo lo que tenés que saber sobre velas y decoración para tu hogar en un solo lugar.</p>
        <div class="d-flex flex-wrap justify-content-between gap-2">
            @foreach ($posts as $post)
            <div class="post">
                <img src="{{ asset('storage/images/posts/' . $post->image) }}" class="post-img" alt="{{ $post->image_alt }}">
                <div class="post-body">
                    <div class="post-content">
                        <h2 class="card-title fs-5 fw-bold mb-2">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->preview }}</p>
                    </div> 
                    <div>
                        <a href="{{ route('post.show', ['id' => $post->id]) }}" class="btn main-button mb-2">Ver entrada</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
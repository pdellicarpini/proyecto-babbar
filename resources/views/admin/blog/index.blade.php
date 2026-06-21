<?php

/** @var Illuminate\Database\Eloquent\Collection | array $posts */

?>

<x-admin-layout>
    <x-slot:title>Admin - Blog</x-slot:title>

    <h1 class="titles">Administrar Blog</h1>

    <a href="{{ route('post.create') }}" class="btn main-button mb-4">Agregar nueva entrada</a>

    <div class="container">
        <div class="shadow">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" width="15%">Imagen</th>
                        <th scope="col">Img Alt</th>
                        <th scope="col">Título</th>
                        <th scope="col">Preview</th>
                        <th scope="col" width="45%">Contenido</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <td><img src="{{ asset('storage/images/posts/' . $post->image) }}" class="img-fluid rounded" alt="{{ $post->image_alt }}"></td>
                        <td>{{ $post->image_alt }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->preview }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ route('post.edit', ['id' => $post->id]) }}" role="button" class="d-block btn btn-sm main-button edit-button mb-1">Editar</a>
                            <a href="{{ route('post.delete', ['id' => $post->id]) }}" role="button" class="d-block btn btn-sm main-button delete-button mb-1">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-admin-layout>
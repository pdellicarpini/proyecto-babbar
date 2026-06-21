<?php

/** @var Illuminate\Support\ViewErrorBag $errors */

?>

<x-admin-layout>
    <x-slot:title>Nueva entrada</x-slot:title>

    <h1 class="titles text-center">Nueva entrada</h1>
    <p class="text-center">Complete el formulario para agregar una nueva entrada al blog.</p>

    @if($errors->any())
    <div class="alert alert-danger">Hay errores en la carga de la entrada.</div>
    @endif

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                @error('title')
                aria-invalid="true"
                aria-errormessage="title-error"
                @enderror
                value="{{ old('title') }}">
            @error('title')
            <div class="text-danger" id="title-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="preview" class="form-label">Preview</label>
            <textarea
                type="text"
                class="form-control @error('preview') is-invalid @enderror"
                id="preview"
                name="preview"
                @error('preview')
                aria-invalid="true"
                aria-errormessage="preview-error"
                @enderror>{{ old('preview') }}</textarea>
            @error('preview')
            <div class="text-danger" id="preview-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea
                class="form-control @error('content') is-invalid @enderror"
                id="content"
                name="content"
                @error('content')
                aria-invalid="true"
                aria-errormessage="content-error"
                @enderror>{{ old('content') }}</textarea>
            @error('content')
            <div class="text-danger" id="content-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input
                type="file"
                class="form-control @error('image') is-invalid @enderror"
                id="image"
                name="image"
                aria-describedby="image-help"
                @error('image')
                aria-invalid="true"
                aria-errormessage="image-error"
                @enderror>
            <div class="form-text" id="image-help">Elegir una imagen para la entrada (máx. 2MB)</div>
            @error('image')
            <div class="text-danger" id="image-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image_alt" class="form-label">Descripción de la imagen</label>
            <input
                type="text"
                class="form-control @error('image_alt') is-invalid @enderror"
                id="image_alt"
                name="image_alt"
                @error('image_alt')
                aria-invalid="true"
                aria-errormessage="image_alt-error"
                @enderror
                value="{{ old('image_alt') }}">
            @error('image_alt')
            <div class="text-danger" id="image_alt-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="featured">Post destacado</label>
            <input
                type="checkbox"
                class="form-check-input"
                id="featured"
                name="featured"
                value="1">
        </div>
        <button type="submit" class="btn main-button">Agregar Entrada</button>
    </form>
</x-admin-layout>
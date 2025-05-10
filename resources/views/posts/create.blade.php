@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 max-w-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800">Crear Publicación</h2>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mt-6 bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Publicar</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800">Iniciar Sesión</h2>
    <form action="{{ route('login') }}" method="POST" class="mt-6 bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Iniciar Sesión</button>
    </form>
</div>
@endsection
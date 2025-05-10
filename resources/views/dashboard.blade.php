@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->username }}
@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class = "w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class = "w-8/12 lg:w-6/12 px-5">
                <img src="{{
                    $user->image ? 
                    asset('profiles') . '/' . $user->image : 
                    asset('img/usuario.png')
                }}" alt="Imagen de Usuario" class="rounded-full">

            </div>

            <div class = "md: w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <div class = "flex items-center  gap-2">
                    <p class = "text-gray-700 text-2xl">{{ $user->username}}</p>
                </div>

            </div>
        </div>
    </div>
    
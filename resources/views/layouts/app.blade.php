<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>CodeGram</title>
</head>

<body class="bg-gray-50">
    <header class="p-4 border-b bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="" style=>
                <img src="{{ asset('images/logo.png') }}" alt="CodeGram" class="h-8" style="height: 48px">
            </a>
            <nav class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('posts.create') }}" class="text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 px-3 py-1.5 rounded-md transition duration-150">Crear Publicación</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-600 hover:text-gray-800">Cerrar Sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-800">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 px-3 py-1.5 rounded-md transition duration-150">Registrarse</a>
                @endauth
            </nav>
        </div>
    </header>
    <main class="py-6">
        @yield('content')
    </main>
</body>
</html>
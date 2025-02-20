<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Profesional</title>
    <link rel="icon" href="{{asset('favicon64.svg')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gradient-to-br from-gray-900 to-gray-700 text-white leading-relaxed min-h-screen">
<div class="fixed inset-0 bg-gradient-to-br from-gray-900/97 to-gray-700/95 z-0"></div>

<nav x-data="{ isOpen: false }" class="fixed top-0 w-full p-6 bg-gray-900/90 backdrop-blur-md z-50 animate-fadeInDown">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center">
        <div class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">
            <a href="{{route('home')}}">Portafolio</a>
        </div>
        <button @click="isOpen = !isOpen" class="lg:hidden text-white hover:text-blue-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div :class="{'hidden': !isOpen}" class="w-full lg:w-auto lg:flex mt-4 lg:mt-0">
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-blue-500 transition-colors">Inicio</a>
                <a href="{{ route('proyectos.guest') }}" class="text-white hover:text-blue-500 transition-colors">Proyectos</a>
                {{-- <a href="#habilidades" class="text-white hover:text-blue-500 transition-colors">Habilidades</a> --}}
                <a href="{{route('contacto.guest')}}" class="text-white hover:text-blue-500 transition-colors">Contacto</a>
            </div>
        </div>
    </div>
</nav>

<main class="pt-24 relative z-10"> <!-- Añadido padding-top y z-index -->
    @yield('content')
</main>

</body>
</html>

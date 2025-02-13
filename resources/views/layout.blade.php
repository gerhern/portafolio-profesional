<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Profesional</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gradient-to-br from-gray-900 to-gray-700 text-white leading-relaxed min-h-screen">
<div class="fixed inset-0 bg-cover bg-center opacity-20 z-0" style="background-image: url('https://picsum.photos/id/1/1920/1080')"></div>
<div class="fixed inset-0 bg-gradient-to-br from-gray-900/97 to-gray-700/95 z-0"></div>

<nav class="fixed top-0 w-full p-6 bg-gray-900/90 backdrop-blur-md z-50 animate-fadeInDown">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">Portafolio</div>
        <div class="space-x-8">
            <a href="{{ route('home') }}" class="text-white hover:text-blue-500 transition-colors">Inicio</a>
            <a href="{{ route('proyectos.guest') }}" class="text-white hover:text-blue-500 transition-colors">Proyectos</a>
            <a href="#habilidades" class="text-white hover:text-blue-500 transition-colors">Habilidades</a>
            <a href="#contacto" class="text-white hover:text-blue-500 transition-colors">Contacto</a>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {

    }
</script>
</body>
</html>

@extends('layout')
@section('content')
    <section class="min-h-screen flex items-center justify-center p-8 relative overflow-hidden" id="inicio">
        <div class="max-w-7xl grid md:grid-cols-2 gap-16 items-center z-10">
            <div class="text-left md:order-1">
                <h1 class="text-5xl font-bold mb-4 animate-fadeInUp">Ingeniero en computación</h1>
                <p class="text-xl mb-8 opacity-80 animate-fadeInUp animation-delay-200">
                    Desarrollador de Software <br>Comprometido con el crecimiento profesional, disfruto creando soluciones
                    innovadoras a través del código. Busco perfeccionar mis habilidades en desarrollo mientras diseño y
                    construyo aplicaciones funcionales y eficientes.
                </p>
                <a href="#proyectos" class="inline-block px-8 py-4 bg-blue-500 text-white rounded-full text-lg font-semibold hover:bg-blue-600 transition-all transform hover:-translate-y-1 hover:shadow-lg animate-fadeInUp animation-delay-400">Ver Proyectos</a>
            </div>
            <div class="relative w-64 h-64 mx-auto md:w-80 md:h-80 md:order-2 animate-fadeInUp animation-delay-500">
                <img src="{{asset('images/profile.jpg')}}" alt="Foto de perfil" class="w-full h-full object-cover rounded-full border-4 border-white/10 shadow-2xl">
            </div>
        </div>
    </section>

    <section class="py-24 bg-black/30 relative z-10" id="proyectos">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($proyectos as $proyecto)
                    <div class="bg-white/10 rounded-xl overflow-hidden transition-transform hover:-translate-y-2 animate-fadeInUp">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="{{ $proyecto->full_url_imagen}}" alt="{{ $proyecto->nombre }}" class="w-full h-full object-contain rounded-t-xl">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{$proyecto->nombre}}</h3>
                            <p class="text-gray-300">{{$proyecto->descripcion_corta}}</p>
                        </div>
                    </div>
                @empty
                    <div class="bg-white/10 rounded-xl overflow-hidden col-span-full p-8 text-center">
                        <p class="text-xl text-gray-400">Sin proyectos disponibles</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-24 relative z-10" id="habilidades">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="text-4xl font-bold mb-12 text-center">Habilidades Técnicas</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/10 rounded-xl p-6 text-center transition-transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold mb-4">Frontend</h3>
                    <p>Html5 Js Angular</p>
                </div>
                <div class="bg-white/10 rounded-xl p-6 text-center transition-transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold mb-4">Backend</h3>
                    <p>Php Laravel</p>
                </div>
                <div class="bg-white/10 rounded-xl p-6 text-center transition-transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold mb-4">Database</h3>
                    <p>Postgresql Mysql SqlServer</p>
                </div>
                <div class="bg-white/10 rounded-xl p-6 text-center transition-transform hover:-translate-y-2">
                    <h3 class="text-xl font-semibold mb-4">DevOps</h3>
                    <p>Linux</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-black/30 text-center relative z-10" id="contacto">
        <div class="max-w-3xl mx-auto px-8">
            <h2 class="text-4xl font-bold mb-4">¿Iniciamos un proyecto juntos?</h2>
            <p class="text-xl mb-8 opacity-80">Estoy disponible para nuevos proyectos y colaboraciones</p>
            <div class="space-x-6">
                <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors text-lg">GitHub</a>
                <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors text-lg">Contacto</a>
            </div>
        </div>
    </section>
@endsection

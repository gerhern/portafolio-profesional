@extends('layout')

@section('content')
    <main class="relative z-10 pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Sección de Proyectos -->
            <section class="mb-16 animate-fadeInDown">
                <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">
                    Proyectos Profesionales
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($proyectos as $project)
                        <div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden rounded-lg transition duration-300 hover:bg-gray-800/70 border border-gray-700">
                            <div class="p-6">
                                @if($project->url_imagen)
                                    <img src="{{ $project->full_url_imagen }}"
                                         alt="{{ $project->nombre }}"
                                         class="w-full h-48 object-cover rounded-lg mb-4">
                                @endif

                                <h3 class="text-xl font-semibold text-white mb-2">
                                    {{ $project->nombre }}
                                </h3>

                                <p class="text-gray-300 mb-4">
                                    {!! $project->descripcion !!}
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach($project->tecnologias as $tech)
                                        <span class="px-3 py-1 bg-gray-700/50 text-gray-300 rounded-full text-sm">
                                        {{ $tech->nombre }}
                                    </span>
                                    @endforeach
                                </div>

                                <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-400">
                                    {{ $project->date }}
                                </span>
                                    <a href="#"
                                       class="text-blue-400 hover:text-blue-300 transition-colors">
                                        Ver más →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Sección de Certificaciones -->
            <section class="animate-fadeInUp">
                <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">
                    Certificaciones
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($certificaciones as $cert)
                        <div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden rounded-lg p-6 transition duration-300 hover:bg-gray-800/70 border border-gray-700">
                            <div class="flex items-start gap-4">
                                @if($cert->full_url_imagen)
                                    <img src="{{ $cert->full_url_imagen }}"
                                         alt="{{ $cert->nombre }}"
                                         class="w-16 h-16 object-contain">
                                @endif

                                <div class="flex-1">
                                    <h3 class="text-xl font-semibold text-white mb-2">
                                        {{ $cert->nombre }}
                                    </h3>

                                    <p class="text-gray-300 mb-2">
                                        {{ $cert->institucion }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-400">
                                        Expedición: {{ $cert->fecha_emision }}
                                    </span>

                                        @if($cert->id)
                                            <a href="#"
                                               target="_blank"
                                               class="text-blue-400 hover:text-blue-300 transition-colors">
                                                Verificar →
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection

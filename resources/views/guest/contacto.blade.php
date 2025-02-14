@extends('layout')

@section('content')
    <div class="relative min-h-screen pt-24 pb-12 z-10">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-8 animate-fadeInDown">
                    <div class="bg-green-600 bg-opacity-20 border border-green-500 text-green-100 px-6 py-4 rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="font-medium">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

                @if($errors->any())
                    <div class="mb-8 animate-fadeInDown">
                    <div class="text-sm text-red-500 font-medium dark:text-red-300 px-2 py-1 rounded-md
                        mb-4 dark:border-red-400 dark:border-2 border-red-500 border-2 focus:border-red-500 focus:ring-2
                        focus:ring-offset-2 focus:ring-red-500 focus:outline-none dark:border-red-300 dark:focus:border-red-300
                        dark:focus:ring-red-300 dark:focus:outline-none dark:hover:border-red-400 dark:hover:border-2
                        dark:hover:ring-red-400 dark:hover:outline-none dark:focus:ring-offset-2 dark:focus:ring-red-400
                        dark:focus:outline-none dark:focus:ring-2 dark:focus:ring-offset-2 ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    </div>
                @endif

            <div class="animate-fadeInUp">
                <h1 class="text-4xl font-bold text-center mb-2 bg-gradient-to-r from-blue-500 to-green-400 bg-clip-text text-transparent">
                    Contacto
                </h1>
                <p class="text-gray-300 text-center mb-8">
                    ¿Tienes un proyecto en mente? ¡Me encantaría escucharlo!
                </p>

                <div class="bg-gray-800/50 backdrop-blur-lg rounded-xl p-8 shadow-xl">
                    <form action="{{ route('contacto.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-medium text-gray-300">
                                Nombre completo
                            </label>
                            <input type="text"
                                   name="nombre"
                                   id="name"
                                   required
                                   class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-colors"
                                   placeholder="Tu nombre"
                                   value="{{old('nombre')?? ''}}">
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium text-gray-300">
                                Correo electrónico
                            </label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   value="{{old('email')?? ''}}"
                                   required
                                   class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-colors"
                                   placeholder="tu@email.com">
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="block text-sm font-medium text-gray-300">
                                Asunto
                            </label>
                            <input type="text"
                                   name="asunto"
                                   id="subject"
                                   value="{{old('asunto')?? ''}}"
                                   required
                                   class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-colors"
                                   placeholder="Asunto del mensaje">
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-medium text-gray-300">
                                Mensaje
                            </label>
                            <textarea name="mensaje"
                                      id="message"
                                      rows="5"
                                      required
                                      class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-colors resize-none"
                                      placeholder="Cuéntame sobre tu proyecto..."> {{old('mensaje') ?? ''}}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                    class="px-6 py-3 bg-gradient-to-r from-blue-500 to-green-400 text-white font-medium rounded-lg hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

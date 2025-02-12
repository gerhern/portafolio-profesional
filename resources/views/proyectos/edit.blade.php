<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar')}} {{ $proyecto->nombre }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('update.proyecto', $proyecto)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Nombre del Proyecto
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600"
                                placeholder="Ej. Proyecto de Innovación"
                                name="nombre"
                                value="{{old('nombre', $proyecto->nombre) ?? '' }}"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Descripción del Proyecto
                            </label>
                            <textarea
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600 h-32 resize-y"
                                placeholder="Introduce una descripción del proyecto..."
                                name="descripcion"
                            >{{old('descripcion', $proyecto->descripcion) ?? '' }}</textarea>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Descripción corta del Proyecto
                            </label>
                            <textarea
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm
                                border-gray-300 rounded-md dark:border-gray-600 h-16 resize-y"
                                placeholder="Introduce una descripción corta..."
                                name="descripcion_corta"
                            >{{old('descripcion_corta', $proyecto->descripcion_corta) ?? ''}}</textarea>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Imagen del Proyecto
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600"
                                placeholder="URL de la imagen del proyecto"
                                name="url_imagen"
                                value="{{old('url_imagen', $proyecto->url_imagen) ?? '' }}"
                            />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <button
                                type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:text-white dark:hover:bg-indigo-600">
                                Actualizar Proyecto
                            </button>
                        </div>
                    </form>

                    @if($errors->any())
                        <div class="inline-block text-sm text-red-500 font-medium dark:text-red-300 px-2 py-1 rounded-md
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

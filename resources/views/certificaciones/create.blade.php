<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar Certificación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('store.certificacion')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Nombre de la Certificación
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600"
                                placeholder="Ej. Curso de Innovación"
                                name="nombre"
                                value="{{ old('nombre')?? '' }}"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Institución que emite la Certificación
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600"
                                placeholder="Ej. Universidad de Autonoma de Mexico"
                                name="institucion"
                                value="{{ old('institucion')?? '' }}"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Fecha de emisión
                            </label>
                            <input
                                type="date"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 sm:text-sm
                                border-gray-300 rounded-md dark:border-gray-600"
                                name="fecha_emision"
                                value="{{ old('fecha_emision')?? '' }}"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Imagen del Certificado
                            </label>
                            <input
                                type="file"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:border-gray-600"
                                name="url_imagen"
                            />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <button
                                type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:text-white dark:hover:bg-indigo-600">
                                Agregar Certificación
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

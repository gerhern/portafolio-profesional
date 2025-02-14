<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mensaje de: ') }} {{$mensaje->email}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                De:
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm
                                border-gray-300 rounded-md dark:border-gray-600 font-bold"
                                disabled
                                value="{{$mensaje->nombre}} - {{$mensaje->email}}"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Asunto:
                            </label>
                            <input
                                type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm
                                border-gray-300 rounded-md dark:border-gray-600 font-bold"
                                value="{{ $mensaje->asunto}}"
                                disabled
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Mensaje:
                            </label>
                            <textarea
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm
                                border-gray-300 rounded-md dark:border-gray-600 h-16 resize-y"
                                placeholder="Introduce una descripción corta..."
                                name="descripcion_corta"
                            >{{ $mensaje->mensaje  }}</textarea>
                        </div>

                    <div class="mt-6 flex justify-end">
                        <form action="{{route('destroy.contacto', $mensaje)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors duration-200 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Eliminar
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

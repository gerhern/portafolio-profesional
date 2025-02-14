<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Certificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="">
                        <a href="{{route('create.certificacion')}}" class="inline-flex items-center px-4 py-2
                        bg-gray-800
                        dark:bg-gray-200 border
                        border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Agregar Certificación</a>
                        <div class="flex flex-wrap mt-4 justify-between">
                            @foreach($certificaciones as $certificacion)
                                <div class="inline-flex items-center px-4 py-2 m-2 text-sm text-gray-700 dark:text-gray-400 border border-gray-200 rounded-md hover:border-gray-300 dark:hover:border-gray-700">
                                    {{ $certificacion->nombre }}

                                    <a href="{{route('edit.certificacion', $certificacion)}}" class="ml-2 text-gray-500
                                    dark:text-gray-400">Editar</a>
                                    <form action="{{route('destroy.certificacion', $certificacion)}}" method="POST"
                                          class="ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-2 text-red-500 hover:text-red-600">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>

                        @if($message = Session::get('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                <strong class="font-bold">Exito!</strong> {{ $message }}
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mensajes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="">
                        <div class="flex flex-wrap mt-4 justify-between">
                            @foreach($mensajes as $msg)
                                <div class="inline-flex items-center px-4 py-2 m-2 text-sm text-gray-700 dark:text-gray-400 border border-gray-200 rounded-md hover:border-gray-300 dark:hover:border-gray-700">
                                    {{ $msg->nombre }} - {{ $msg->email }}
                                    <a href="{{route('show.contacto', $msg)}}" class="ml-2 text-gray-500
                                    dark:text-gray-400">Ver</a>
                                    <form action="{{route('destroy.contacto', $msg)}}" method="POST" class="ml-2">
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

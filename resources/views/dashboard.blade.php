<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="flex items-center gap-4">
                        <span class="text-sm font-medium text-green-600 dark:text-green-400">
                            {{ __('Cantidad de proyectos') }}: {{ $cantidadProyectos }}
                        </span>
                    </div>

                    <div class="flex items-center justify-center">
                        <a href="{{ route('create.proyecto') }}" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600
                        hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:text-gray-200 dark:hover:bg-indigo-500 dark:focus:ring-indigo-400">
                            {{ __('Create New Project') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('repositories.store') }}" method="POST" class="max-w-md">
                    @csrf
                    <label for="url" class="block my-2 font-medium text-sm text-gray-400">Url *</label>
                    <input class="form-input bg-gray-600 text-white w-full rounded-md shadow-sm" type="text"
                        name="url">
                    <label for="description" class="block my-2 font-medium text-sm text-gray-400">Descripción *</label>
                    <textarea name="description" cols="30" rows="10"
                        class="text-white form-input w-full rounded-md shadow-sm bg-gray-600"></textarea>
                    <input type="submit" value="Crear"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md mt-5">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

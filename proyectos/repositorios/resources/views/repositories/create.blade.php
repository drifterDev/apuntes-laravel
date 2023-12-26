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
                    <label for="url" class="block font-medium text-sm text-gray-700">URL *</label>
                    <input class="form-input w-full rounded-md shadow-sm" type="text" name="url">
                    <label for="description" class="block font-medium text-sm text-gray-700">Descripción *</label>
                    <textarea name="description" cols="30" rows="10" class="form-input w-full rounded-md shadow-sm">
                    </textarea>
                    <hr class="my-4">
                    <input type="submit" value="Crear" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

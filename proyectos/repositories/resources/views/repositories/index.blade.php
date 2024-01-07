<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-right mb-8">
                <a class="bg-blue-500 text-white font-bold px-4 py-2 rounded-md text-xs"
                    href="{{ route('repositories.create') }}">
                    Agregar un nuevo repositorio
                </a>
            </p>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4">
                <table class="text-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Enlace</th>
                            <th class="px-4 py-2">&nbsp;</th>
                            <th class="px-4 py-2">&nbsp;</th>
                            <th class="px-4 py-2">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($repositories as $repository)
                            <tr>
                                <td class="border px-4 py-2">{{ $repository->id }}</td>
                                <td class="border px-4 py-2">{{ $repository->url }}</td>
                                <td class=" pr-4 pl-8 py-2">
                                    <a href="{{ route('repositories.show', $repository) }}"
                                        class="px-4 py-2 rounded-md border border-white cursor-pointer text-white">Ver</a>
                                </td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('repositories.edit', $repository) }}"
                                        class="px-4 py-2 rounded-md border border-white  cursor-pointer text-white">Editar</a>
                                </td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('repositories.destroy', $repository) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar"
                                            class="px-4 py-2 rounded-md bg-red-500 cursor-pointer text-white">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-2">
                                    No hay repositorios creados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

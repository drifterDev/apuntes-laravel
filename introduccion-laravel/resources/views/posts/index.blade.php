<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
        <a class="mt-5 text-gray-300 block p-2 border-2 border-gray-600 w-48 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer"
            href="{{ route('posts.create') }}">Crear un nuevo post</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mb-4">
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-200 text-lg">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4"><a href="{{ route('posts.edit', $post) }}"
                                        class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit"
                                            class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer"
                                            value="Eliminar" onclick="return confirm('Desea eliminar el post?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

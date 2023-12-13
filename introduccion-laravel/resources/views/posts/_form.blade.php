@csrf
<label for="title" class="uppercase block mb-3 text-gray-300 text-sm">Título</label>
<input type="text" name="title" id="title" class="rounded border-gray-600 bg-slate-700 w-full mb-4"
    value="{{ $post->title }}">

<label for="body" class="uppercase block mb-3 text-gray-300 text-sm">Cuerpo</label>
<textarea name="body" id="body" cols="30" rows="10"
    class="rounded border-gray-600 bg-slate-700 w-full mb-4">{{ $post->body }}</textarea>

<div class="flex justify-between">
    <a href="{{ route('posts.index') }}"
        class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer">Volver</a>

    <input type="submit"
        class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer"
        value="Enviar">

</div>

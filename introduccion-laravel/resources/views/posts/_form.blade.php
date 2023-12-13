@csrf
<label for="title" class="uppercase block mb-3 text-gray-300 text-sm">Título</label>
<span class="block text-red-800 mb-2">
    @error('title')
        {{ $message }}
    @enderror
</span>
<input type="text" name="title" id="title" class="rounded border-gray-600 bg-slate-700 w-full mb-4"
    value="{{ old('title', $post->title) }}">

<label for="slug" class="uppercase block mb-3 text-gray-300 text-sm">SLug</label>
<span class="block text-red-800 mb-2">
    @error('slug')
        {{ $message }}
    @enderror
</span>
<input type="text" name="slug" id="slug" class="rounded border-gray-600 bg-slate-700 w-full mb-4"
    value="{{ old('slug', $post->slug) }}">


<label for="body" class="uppercase block mb-3 text-gray-300 text-sm">Cuerpo</label>
<span class="block text-red-800 mb-2">
    @error('body')
        {{ $message }}
    @enderror
</span>
<textarea name="body" id="body" cols="30" rows="10"
    class="rounded border-gray-600 bg-slate-700 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between">
    <a href="{{ route('posts.index') }}"
        class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer">Volver</a>

    <input type="submit"
        class="text-gray-300 block p-2 border-2 border-gray-600 w-20 text-center hover:bg-gray-600 hover:rounded-lg transition-all cursor-pointer"
        value="Enviar">

</div>

<div>
    <select name="category_id"
        class="bg-slate-800 border-1 w-full capitalize border-slate-900 rounded-md p-3 text-white/60 text-xs mb-4">
        <option value="">Seleccionar categoría</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (old('category_id', $thread->category_id) == $category->id) selected @endif>{{ $category->name }}
            </option>
        @endforeach
    </select>
    <input type="text" name="title" placeholder="Título"
        class="bg-slate-800 border-1 w-full border-slate-900 rounded-md p-3 text-white/60 text-xs mb-4"
        value="{{ old('title', $thread->title) }}">
    <textarea placeholder="Descripción del problema" name="body" rows="10"
        class="bg-slate-800 border-1 w-full border-slate-900 rounded-md p-3 text-white/60 text-xs mb-4">{{ old('body', $thread->body) }}</textarea>
</div>

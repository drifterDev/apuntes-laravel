@props(['trigger'])

<div x-cloak x-show="{{ $trigger }}" x-on:click.self="{{ $trigger }} = false"
    x-on:keydown.escape.window="{{ $trigger }} = false"
    class="flex fixed top-0 w-full bg-gray-900 bg-opacity-60 h-full items-center">
    <div {{ $attributes->merge([
        'class' => 'm-auto shadow-2xl rounded-xl p-8 ',
    ]) }}>
        {{ $slot }}
    </div>
</div>

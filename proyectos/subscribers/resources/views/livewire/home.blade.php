<div x-data="{ showSubscribe: false }" class="flex flex-col bg-indigo-900 h-screen">
    <nav class="pt-5 flex justify-between items-center container mx-auto text-indigo-200">
        <a href="/" class="text-4xl font-bold">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a class="ml-5" href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex w-1/3 flex-col items-start">
            <h1 class="font-bold text-white text-5xl leading-tight mb-4">
                Simple generic landing page to subscribe
            </h1>
            <p class="text-indigo-200 text-xl mb-10">
                We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind
                subscribing?
            </p>
            <x-secondary-button x-on:click="showSubscribe=true"
                class="py-3 px-8 dark:bg-red-500 dark:hover:bg-red-600 dark:text-white">
                {{ __('Subscribe') }}
            </x-secondary-button>
        </div>
    </div>
    <div x-cloak x-show="showSubscribe" x-on:click.self="showSubscribe = false"
        x-on:keydown.escape.window="showSubscribe = false"
        class="flex fixed top-0 w-full bg-gray-900 bg-opacity-60 h-full items-center">
        <div class="m-auto bg-pink-500 shadow-2xl rounded-xl p-8 ">
            <p class="text-white font-extrabold text-5xl text-center">Let's do it!</p>
            <form wire:submit.prevent='subscribe' class="flex flex-col items-center p-24">
                @csrf
                <x-text-input placeholder="Email address" type="email" name="email" wire:model='email'
                    class="px-5 py-3 w-80 dark:text-black dark:bg-white dark:border-blue-400 border"></x-text-input>
                <span class="text-gray-100 text-xs">We will send you a confirmation email.</span>
                <x-secondary-button type="submit"
                    class="px-5 py-3 mt-5 w-80 dark:bg-blue-500 dark:hover:bg-blue-600 justify-center">
                    {{ __('Get In') }}
                </x-secondary-button>
            </form>
        </div>
    </div>
</div>

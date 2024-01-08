<div x-data="{
    showSubscribe: @entangle('showSubscribe'),
    showSuccess: @entangle('showSuccess')
}" class="flex flex-col bg-indigo-900 h-screen">
    <nav class="pt-5 flex justify-between items-center container mx-auto text-indigo-200">
        <a href="/" class="text-4xl font-bold">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex w-1/2 flex-col items-start">
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
    <x-modal-subscribe trigger="showSubscribe" class="bg-pink-500">
        <p class="text-white font-extrabold text-5xl text-center">Let's do it!</p>
        <form wire:submit.prevent='subscribe' class="flex flex-col items-center p-24">
            @csrf
            <x-text-input style="color: black;" placeholder="Email address" name="email" wire:model='email'
                class="px-5 py-3 w-80 dark:bg-white dark:border-blue-400 border"></x-text-input>
            <span class="text-gray-100 text-xs">
                @error('email')
                    {{ $message }}
                @else
                    We will send you a confirmation email.
                @enderror
            </span>
            <x-secondary-button type="submit"
                class="px-5 py-3 mt-5 w-80 dark:bg-blue-500 dark:hover:bg-blue-600 justify-center">
                <span wire:loading wire:target='subscribe' class=" animate-spin">&#9696;</span>
                <span wire:loading.remove wire:target='subscribe'>Get In</span>
            </x-secondary-button>
        </form>
    </x-modal-subscribe>
    <x-modal-subscribe class="bg-green-500" trigger="showSuccess">
        <p class=" animate-pulse text-white font-extrabold text-9xl text-center">&check;</p>
        <p class="text-white font-extrabold text-5xl text-center mt-16">Great!</p>
        @if (request()->has('verified') && request()->verified == 1)
            <p class="text-white text-3xl text-center ">Your email has been verified.</p>
        @else
            <p class="text-white text-3xl text-center ">See you in your inbox.</p>
        @endif
    </x-modal-subscribe>

</div>

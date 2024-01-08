<div class="p-6 text-gray-900 dark:text-gray-100">
    <p class="text-2xl text-gray-400 font-bold underline mb-6">Subscribers</p>
    <div class=" px-8">
        <x-text-input type="text" class=" rounded-lg border float-right border-gray-300 mb-4 w-1/3 pl-8"
            placeholder="Search" wire:model.live='search'>
        </x-text-input>
        @if ($subscribers->isEmpty())
            <div class="flex w-full bg-red-400 p-5 rounded-lg">
                <p class=" text-red-800">No subscribers found</p>
            </div>
        @else
            <table class="w-full">
                <thead class=" border-b-2 border-gray-300 text-gray-300">
                    <tr>
                        <th class=" px-6 py-3 text-left">Email</th>
                        <th class=" px-6 py-3 text-left">Verified</th>
                        <th class=" px-6 py-3 text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr class=" text-sm text-gray-300 border-b border-gray-500">
                            <td class=" px-6 py-4">{{ $subscriber->email }}</td>
                            <td class=" px-6 py-4">
                                {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}
                            </td>
                            <td class=" px-6 py-4">
                                <x-secondary-button
                                    wire:click='delete({{ $subscriber->id }})'>Delete</x-secondary-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif
    </div>
</div>

@section('title', '| '.$court->court)

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{ $court->court }}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <div class="flex flex-wrap justify-center">
                        <img src="/storage/{{ $court->thumbnail }}" class="p-1 bg-white border rounded max-w-sm"
                            alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
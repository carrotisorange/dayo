@section('title', '| '.'Search')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex items-center justify-center">
                            <form action="/search" method="POST">
                                @csrf
                                <div class="flex">

                                    <input type="text" class="px-4 py-2 w-80" value="{{ $currentLocation }}"
                                        placeholder="Search..." required>
                                    <x-button class="text-orange flex items-center justify-center px-4 border-l">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                        </svg>
                                    </x-button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div>

            </div>

        </div>

</x-app-layout>
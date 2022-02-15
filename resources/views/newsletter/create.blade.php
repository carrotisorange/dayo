@section('title', '| Newsletter')

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Newsletter
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="p-6 container md:w-2/3 xl:w-auto mx-auto flex flex-col xl:items-stretch justify-between xl:flex-row">
                <div class="xl:w-1/2 md:mb-14 xl:mb-0 relative h-auto flex items-center justify-center">
                    <img src="{{ asset('/logo.png') }}" alt="Envelope with a newsletter" role="img"
                        class="h-full xl:w-full lg:w-1/2 w-full" />
                </div>
                <div class="w-full xl:w-1/2 xl:pl-40 xl:py-28">
                    <h1
                        class="text-2xl md:text-4xl xl:text-5xl font-bold leading-10 text-gray-800 mb-4 text-center xl:text-left md:mt-0 mt-4">
                        Get early access.</h1>
                    {{-- <p class="text-base leading-normal text-gray-600 text-center xl:text-left">.</p> --}}
                    <form action="/newsletter" method="POST">
                        @csrf
                        <div class="flex items-stretch mt-10">
                            <input
                                class="bg-white-100 rounded-lg rounded-r-none text-base leading-none text-gray-800 p-5 w-4/5 border border-transparent focus:outline-none focus:border-gray-500"
                                name="email" type="email" placeholder="Your Email" />
                            <x-button>subscribe</x-button>


                        </div>
                        @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
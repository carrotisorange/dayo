@section('title', '| '.'Filter')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Result
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-center">Results: <span class="text-red font-bold">{{ $currentLocation }}</span></p>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    
                    <div class="flex">
                        
                        <div class="grid grid-cols-3 ">
                           Filters
                        </div>
                        <div class="grid grid-cols-9">
                        @foreach($courts as $court)
                        <a href="/court/{{ $court->slug }}"><img src="/storage/{{ $court->thumbnail }}" class="p-2 bg-white border rounded max-w-sm mt-5 mx-5 ml-5 mr-5 hover:bg-orange-600"
                            alt="..." /></a>
                        @endforeach
                
                        </div>
                        
                    </div>
                 
                </div>
            </div>
        <div class="mt-5">
            {{ $courts->links() }}
        </div>

        </div>

</x-app-layout>
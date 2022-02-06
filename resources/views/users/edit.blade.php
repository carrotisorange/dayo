@section('title', '| Create')

<x-app-layout>

    <x-auth-card>
        <x-slot name="logo">

        </x-slot>


        <form method="POST" action="/user/{{ Auth::user()->username }}">
            @csrf
            @method('PUT')

            <div>
                <x-auth-validation-errors>
                </x-auth-validation-errors>
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="Name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')?old('name'):$user->name" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                    :value="old('username')?old('username'):$user->username" required autofocus />
            </div>



            <!-- Mobile number -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email"
                    :value="old('email')?old('email'):$user->email" required autofocus />
            </div>



            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Save') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-app-layout>
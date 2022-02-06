@section('title', '| Create')

<x-app-layout>
    
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>


        <form method="POST" action="/store">
            @csrf

            <div >
                <x-auth-validation-errors>
                </x-auth-validation-errors>
            </div>

            <!-- Name -->
            <div class="mt-4"> 
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" 
                    required autofocus />
            </div>

            <!-- Mobile number -->
            <div class="mt-4">
                <x-label for="mobileNumber" :value="__('Mobile number')" />

                <x-input id="mobileNumber" class="block mt-1 w-full" type="text" name="mobileNumber" required />
            </div>

            <!-- Country -->
            <div class="mt-4 ">
                <x-label for="country_id" :value="__('Country')" />
                <x-select id="country_id" name=" country_id" required>
                    <option value="">Select one</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->country }}</option>
                    @endforeach
                </x-select>

            </div>

            <!-- Region -->
            <div class="mt-4">
                <x-label for="region_id" :value="__('Region')" />
                <x-select id="region_id" name="region_id" required>
                    <option value="">Select one</option>
                    @foreach ($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->region }}</option>
                    @endforeach
                </x-select>

            </div>

            <!-- Province -->
            <div class="mt-4">
                <x-label for="province_id" :value="__('Province')" />
                <x-select id="province_id" name="province_id" required>
                    <option value="">Select one</option>
                    @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->province }}</option>
                    @endforeach
                </x-select>

            </div>

            <!-- City -->
            <div class="mt-4">
                <x-label for="city_id" :value="__('City')" />
                <x-select id="city_id" name="city_id" required>
                    <option value="">Select one</option>
                    @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                    @endforeach
                </x-select>

            </div>

            <!-- Barangay -->
            <div class="mt-4">
                <x-label for="barangay_id" :value="__('Barangay')" />
                <x-select id="barangay_id" name="barangay_id" required>
                    <option value="">Select one</option>
                    @foreach ($barangays as $barangay)
                    <option value="{{ $barangay->id }}">{{ $barangay->barangay }}</option>
                    @endforeach
                </x-select>

            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Submit') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-app-layout>
@section('title', '| Create')

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create
        </h2>
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">

        </x-slot>


        <form method="POST" action="/court/store" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-form.input name="court">
                </x-form.input>

                <x-form.error name="court">
                </x-form.error>
            </div>


            <!-- Mobile number -->
            <div class="mt-4">
                <x-form.input name="mobileNumber">

                </x-form.input>

                <x-form.error name="mobileNumber">
                </x-form.error>
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-form.input name="price">

                </x-form.input>

                <x-form.error name="price" type="number">
                </x-form.error>
            </div>

            <!-- Country -->
            <div class="mt-4 ">
                <x-label for="country_id" :value="__('Country')" />
                <x-select id="country_id" name=" country_id" required>
                    <option value="">Select one</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ old('country_id')==$country->id? 'selected': 'Select one'
                        }}>{{ $country->country }}</option>
                    @endforeach
                </x-select>

                <x-form.error name="country_id">
                </x-form.error>
            </div>

            <!-- Region -->
            <div class="mt-4">
                <x-label for="region_id" :value="__('Region')" />
                <x-select id="region_id" name="region_id" required>
                    <option value="">Select one</option>
                    @foreach ($regions as $region)
                    <option value="{{ $region->id }}" {{ old('region_id')==$region->id? 'selected': 'Select one' }}>{{
                        $region->region }}</option>
                    @endforeach
                </x-select>
                <x-form.error name="region_id">
                </x-form.error>
            </div>

            <!-- Province -->
            <div class="mt-4">
                <x-label for="province_id" :value="__('Province')" />
                <x-select id="province_id" name="province_id" required>
                    <option value="">Select one</option>
                    @foreach ($provinces as $province)
                    <option value="{{ $province->id }}" {{ old('province_id')==$province->id? 'selected': 'Select one'
                        }}>{{ $province->province }}</option>
                    @endforeach
                </x-select>
                <x-form.error name="province_id">
                </x-form.error>
            </div>

            <!-- City -->
            <div class="mt-4">
                <x-label for="city_id" :value="__('City')" />
                <x-select id="city_id" name="city_id" required>
                    <option value="">Select one</option>
                    @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ old('city_id')==$city->id? 'selected': 'Select one' }}>{{
                        $city->city }}</option>
                    @endforeach
                </x-select>
                <x-form.error name="city_id">
                </x-form.error>
            </div>

            <!-- Barangay -->
            <div class="mt-4">
                <x-label for="barangay_id" :value="__('Barangay')" />
                <x-select id="barangay_id" name="barangay_id" required>
                    <option value="">Select one</option>
                    @foreach ($barangays as $barangay)
                    <option value="{{ $barangay->id }}" {{ old('barangay_id')==$barangay->id? 'selected': 'Select one'
                        }}>{{ $barangay->barangay }}</option>
                    @endforeach
                </x-select>
                <x-form.error name="barangay_id">
                </x-form.error>
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-label for="thumbnail" :value="__('Thumbnail')" />

                <x-input id="thumbnail" value="{{ old('thumbnail') }}" class="block mt-1 w-full" type="file"
                    name="thumbnail" required />

                <x-form.error name="thumbnail">
                </x-form.error>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Submit') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-app-layout>
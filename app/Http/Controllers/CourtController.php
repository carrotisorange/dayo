<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\Country;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;
use App\Models\Barangay;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $address = Location::get('https://'.$request->ip()); 

        $currentLocation = $address->cityName.', '.$address->regionName.','.$address->countryName;
    
        return view('courts.index', 
        [
            'currentLocation' => $currentLocation
        ]);
    }

    public function search(Request $request)
    {
        $address = Location::get('https://'.$request->ip()); 

        $currentLocation = $address->cityName.', '.$address->regionName.','.$address->countryName;

        return view('courts.result',[
            'courts' => Court::paginate(5),
            'currentLocation' => $currentLocation
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $countries = Country::idDescending()->get();
        $regions = Region::idDescending()->get();
        $provinces = Province::idDescending()->get();
        $cities = City::idDescending()->get();
        $barangays = Barangay::idDescending()->get();

        return view('courts.create', 
            [
                'countries' => $countries,
                'regions' => $regions,
                'provinces' => $provinces,
                'cities' => $cities,
                'barangays' => $barangays
            ]        
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate(
            [
                'court' => 'required|max:255|string',
                'mobileNumber' => 'required',
                'country_id' => ['required', Rule::exists('countries', 'id')],
                'region_id' => ['required', Rule::exists('regions', 'id')],
                'province_id' => ['required', Rule::exists('provinces', 'id')],
                'city_id' => ['required', Rule::exists('cities', 'id')],
                'barangay_id' => ['required', Rule::exists('barangays', 'id')],
                'description' => 'nullable',
                'thumbnail' => 'required|image',
                'price' => 'required|integer'
            ]
        );

        $attributes['user_id'] = Auth::user()->id;
        $attributes['slug'] = Str::slug($request->court.' '.Str::random(10), '-');
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        $court = Court::create($attributes);

        return redirect('/court/'.$court->slug.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {
        return view('courts.show',['court'=>$court]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court)
    {
        return view('courts.edit',['court'=>$court]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Court $court)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court)
    {
        //
    }
}

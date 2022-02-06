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

        $courts = Court::all();

        $address = Location::get('https://'.$request->ip()); 

        if($request->getCurrentLocation){
            $currentLocation = $address->cityName.', '.$address->regionName.','.$address->countryName;
        }else{
            $currentLocation="";
        }
        

       

        return view('courts.index', 
        [
            'courts'=>$courts,
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
        request()->validate(
            [
                'name' => 'required|max:255',
                'mobileNumber' => 'required',
                'country_id' => 'required',
                'region_id' => 'required',
                'province_id' => 'required',
                'city_id' => 'required',
                'barangay_id' => 'required',
                'description' => 'nullable'
            ]
        );

        $court = Court::create(
            [
                'name' => request('name'),
                'mobileNumber' => request('mobileNumber'),
                'country_id' => request('country_id'),
                'region_id' => request('region_id'),
                'province_id' => request('province_id'),
                'city_id' => request('city_id'),
                'barangay_id' => request('barangay_id'),
                'user_id' => Auth::user()->id
            ]
        );

        return redirect('/court/'.$court->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {
        $court = Court::findOrFail(1);

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
        //
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

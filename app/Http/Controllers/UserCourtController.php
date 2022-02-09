<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Court;
use Illuminate\Support\Facades\Auth;
use DB;

class UserCourtController extends Controller
{
    public function index()
    {
        $courts = DB::table('users')
                ->join('courts', 'user_id', 'users.id')
                ->join('countries', 'countries.id', 'country_id')
                ->join('regions', 'regions.id', 'region_id')
                ->join('provinces', 'provinces.id', 'province_id')
                ->join('cities', 'cities.id', 'city_id')
                ->join('barangays', 'barangays.id', 'barangay_id')
                ->paginate(10);

        return view('courts.users.index',[
            'courts' => $courts
        ]);
    }
    

    public function edit($id)
    {
        $court = Court::findOrFail($id);

        return view('courts.users.edit', [
            'court' => $court
        ]);
    }
}

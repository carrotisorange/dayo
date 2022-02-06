<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Court;
use Illuminate\Support\Facades\Auth;

class UserCourtController extends Controller
{
    public function index()
    {
        $courts = User::findOrFail(Auth::user()->id)->courts;

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

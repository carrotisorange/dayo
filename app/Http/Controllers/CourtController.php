<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
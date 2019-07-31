<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;

use App\Garage;
use Illuminate\Http\Request;
use App\Http\Resources\Garage\GarageResource;
use App\Http\Resources\Garage\GarageCollection;
use App\Http\Resources\Mechanician\MechanicianResource;
use App\Http\Resources\Mechanician\MechanicianCollection;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GarageCollection::collection(Garage::all());
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
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show(Garage $garage)
    {
        //
    }
    public function mech(Garage $garage)
    {
        //
        return MechanicianCollection::collection($garage->mechanicians);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function edit(Garage $garage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garage $garage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
        //
    }
}

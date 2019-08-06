<?php

namespace App\Http\Controllers\api;


use App\Speciality;
use App\Mechanician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Speciality\SpecialityResource;
use App\Http\Resources\Speciality\SpecialityCollection;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return SpecialityCollection::collection($mechanician->specialities);
        return SpecialityCollection::collection(Speciality::all());

    }

  
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function show(Speciality $speciality)
    {
        return new SpecialityResource(Speciality::find($speciality->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function edit(speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, speciality $speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(speciality $speciality)
    {
        //
    }
}

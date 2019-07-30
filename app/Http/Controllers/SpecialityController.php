<?php

namespace App\Http\Controllers;

use App\Speciality;
use App\Mechanician;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mechanician $mechanician)
    {
        //
        // return Speciality::all();
        foreach($mechanician->specialities as $specialities)
        // return $specialities;
        return $mechanician->specialities;
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
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function show(speciality $speciality)
    {
        //
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

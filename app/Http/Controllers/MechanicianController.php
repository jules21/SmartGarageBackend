<?php

namespace App\Http\Controllers;

use App\Mechanician;
use Illuminate\Http\Request;
use App\Http\Resources\Mechanician\MechanicianResource;
use App\Http\Resources\Mechanician\MechanicianCollection;


class MechanicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return new MechanicianCollection(Mechanician::all());
        return MechanicianCollection::collection(Mechanician::all());
        // return MechanicianCollection::collection(Mechanician::paginate(20));
        // return Mechanician::all();
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
     * @param  \App\mechanician  $mechanician
     * @return \Illuminate\Http\Response
     */
    public function show(mechanician $mechanician)
    {
        
        return new MechanicianResource($mechanician);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mechanician  $mechanician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mechanician $mechanician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mechanician  $mechanician
     * @return \Illuminate\Http\Response
     */
    public function destroy(mechanician $mechanician)
    {
        //
    }
}

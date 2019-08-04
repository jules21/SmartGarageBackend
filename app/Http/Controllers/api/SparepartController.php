<?php

namespace App\Http\Controllers\api;


use App\Sparepart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Sparepart\SparepartResource;
use App\Http\Resources\Sparepart\SparepartCollection;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return SparepartCollection::collection(Sparepart::all());
    }

 
    public function store(Request $request)
    {
        //
    }

    public function show(Sparepart $sparepart)
    {
        return new SparepartResource(Sparepart::find($sparepart->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit(sparepart $sparepart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sparepart $sparepart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy(sparepart $sparepart)
    {
        //
    }
}

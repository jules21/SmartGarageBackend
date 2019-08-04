<?php

namespace App\Http\Controllers\api;


use App\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Service\ServiceResource;
use App\Http\Resources\Service\ServiceCollection;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ServiceCollection::collection(Service::all());
        return ServiceCollection::collection(Service::paginate(7));
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Service $service)
    {
        return new ServiceResource(Service::find($service->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\api;


use App\Garage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Garage\GarageResource;
use App\Http\Resources\Garage\GarageCollection;
use App\Http\Resources\Service\ServiceCollection;
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
        // return GarageCollection::collection(Garage::paginate(10));
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
        $this->validate(
            $request,
            [
           "name" => 'required',
           "phone" => 'required',
           "address" =>'required',

       ]
        );
        $megarage = garage::create([
            "name" => $request->input('name'),
            "phone" => $request->input('phone'),
            "location" => $request->input('location'),
            "address" => $request->input('address'),
            "description" => $request->input('description')
          ]);
        if ($megarage) {
            return response()->json(['success'=>'garage registered successful']);
        } else {
            return response()->json(['error'=>'Registration failed please try again later!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show(Garage $garage)
    {
        return new GarageResource(Garage::find($garage->id));
    }

    public function update(Request $request, Garage $garage)
    {
       
          $this->validate(
            $request,
            [
         "name" => 'required',
         "address" =>'required',
         "phone" => 'required',

     ]
      );


        $megarage = Garage::where('id', $garage->id)->update([
          "names" => $request->input('names'),
          "phone" => $request->input('phone'),
          "location" => $request->input('location'),
          "address" => $request->input('address'),
          "description" => $request->input('description')
        ]);
        if ($megarage) {
            return response()->json(['success'=>'garage update successful']);
        } else {
            return response()->json(['error'=>'upating failed please try again later!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
             $garage = Garage::where('id', $garage->id);
             if ($garage->delete()) {
                 return response()->json(['success'=>'garage deleted successful']);
             } else {
                 return response()->json(['error'=>'delete garage failed please try again later!']);
             }
    }
    public function mech(Garage $garage)
    {
        return MechanicianCollection::collection($garage->mechanicians);
    }
    public function serv(Garage $garage)
    {
        return ServiceCollection::collection($garage->services);
    }
}

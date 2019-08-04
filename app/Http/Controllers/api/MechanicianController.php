<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
        $this->validate(
            $request,
            [
           "names" => 'required',
           "email" =>'required',
           "phone" => 'required',
           "location" =>'required',
           "password" =>'required',
           "address" =>'required',

       ]
        );
        $memechanician = Mechanician::create([
            "names" => $request->input('names'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone'),
            "location" => $request->input('location'),
            "address" => $request->input('address'),
            "garage_id" => $request->input('garage_id'),
            "password" => $request->input('password')
          ]);
        if ($memechanician) {
            return response()->json(['success'=>'mechanician registered successful']);
        } else {
            return response()->json(['error'=>'Registration failed please try again later!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mechanician  $mechanician
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanician $mechanician)
    {
        return new MechanicianResource(Mechanician::find($mechanician->id));
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
        // dd($request->all());
        $this->validate(
            $request,
            [
         "names" => 'required',
         "email" =>'required',
         "phone" => 'required',
         "location" =>'required',
         "password" =>'required',
         "address" =>'required',

     ]
      );
        $memechanician = Mechanician::find($mechanician->id);
        $memechanician->names = $request->input('names');
        $memechanician->email = $request->input('email');
        $memechanician->phone = $request->input('phone');
        $memechanician->location = $request->input('location');
        $memechanician->address = $request->input('address');
        $memechanician->garage_id = $request->input('garage_id');
        $memechanician->password = $request->input('password');


        // $memechanician = Mechanician::where('id', $mechanician->id)->update([
        //   "names" => $request->input('names'),
        //   "email" => $request->input('email'),
        //   "phone" => $request->input('phone'),
        //   "location" => $request->input('location'),
        //   "address" => $request->input('address'),
        //   "garage_id" => $request->input('garage_id'),
        //   "password" => $request->input('password')
        // ]);
        // if ($memechanician) {
        if ($memechanician->save()) {
            return response()->json(['success'=>'mechanician update successful']);
        } else {
            return response()->json(['error'=>'upating failed please try again later!']);
        }
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
        $mechanician = Mechanician::where('id', $mechanician->id);
        if ($mechanician->delete()) {
            return response()->json(['success'=>'mechanician deleted successful']);
        } else {
            return response()->json(['error'=>'delete mechanician failed please try again later!']);
        }
    }
}

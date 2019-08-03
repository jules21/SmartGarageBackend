<?php

namespace App\Http\Controllers;

use App\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::all();
        return view('garage.index', compact('garages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garage.create');
    }

   
    public function store(Request $request)
    {
        $garage = Garage::create([
            'name' => $request->get('name'),
            'address'=> $request->get('address'),
            'description'=> $request->get('description'),
            'phone'=> $request->get('phone'),
            'location'=> $request->get('location'),

          ]);
  if($garage)
  {
      return back()->with('success', 'new garage created successful');
  }
  else
  {
      return back()->withInput();
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
        $garage = Garage::find($garage->id);
        return view('garage.show', compact('garage'));

    }

    public function edit(Garage $garage)
    {
        $garage = Garage::find($garage->id);
        return view('garage.edit', compact('garage'));

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
        $Updategarage = Garage::where('id', $garage->id)
        ->update(
    [
        'name' => $request->get('name'),
        'address'=> $request->get('address'),
        'description'=> $request->get('description'),
        'phone'=> $request->get('phone'),
        'location'=> $request->get('location'),
    ]);
      if($Updategarage)
                 {      
                  return back()->with('success', 'garage updated successful');
                 }
      else
          return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
        $deletegarage = Garage::where('id', $garage->id)->delete();

        if ($deletegarage) {
            return redirect('admin/garages')->with('success', 'garage deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}

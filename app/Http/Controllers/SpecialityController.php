<?php

namespace App\Http\Controllers;

use App\Speciality;
use App\Mechanician;
use Illuminate\Http\Request;
use App\Http\Resources\Speciality\SpecialityResource;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = Speciality::all();
        return view('specialities.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('specialities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialities = Speciality::create([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
          ]);
        if($specialities)
        {
            return back()->with('success', 'new mech speciality created successful');
        }
        else
        {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function show(Speciality $speciality)
    {
        $speciality = Speciality::find($speciality->id);
        return view('specialities.show', compact('speciality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function edit(Speciality $speciality)
    {
        $speciality = Speciality::find($speciality->id);
        return view('specialities.edit', compact('speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speciality $speciality)
    {
        $Updatespeciality = Speciality::where('id', $speciality->id)
        ->update(
    [
        'name' => $request->get('name'),
        'description'=> $request->get('description'),
    ]);
      if($Updatespeciality)
                 {      
                  return back()->with('success', 'speciality updated successful');
                 }
      else
          return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speciality $speciality)
    {
        $deletespecialities = Speciality::where('id', $speciality->id)->delete();

        if ($deletespecialities) {
            return redirect('admin/specialities')->with('success', 'speciality deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Sparepart;
use Illuminate\Http\Request;
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
        $spareparts = Sparepart::all();
        return view('sparepart.index', compact('spareparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sparepart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sparepart = Sparepart::create([
            'name' => $request->get('name'),
            'address'=> $request->get('address'),
            'description'=> $request->get('description'),
            'phone'=> $request->get('phone'),
            'location'=> $request->get('location'),

          ]);
  if($sparepart)
  {
      return back()->with('success', 'new sparepart store created successful');
  }
  else
  {
      return back()->withInput();
  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function show(sparepart $sparepart)
    {
        $sparepart = Sparepart::find($sparepart->id);
        return view('sparepart.show', compact('sparepart'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit(sparepart $sparepart)
    {
        $sparepart = Sparepart::find($sparepart->id);
        return view('sparepart.edit', compact('sparepart'));
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
        $Updatesparepart = Sparepart::where('id', $sparepart->id)
        ->update(
    [
        'name' => $request->get('name'),
        'address'=> $request->get('address'),
        'description'=> $request->get('description'),
        'phone'=> $request->get('phone'),
        'location'=> $request->get('location'),
    ]);
      if($Updatesparepart)
                 {      
                  return back()->with('success', 'sparepart store updated successful');
                 }
      else
          return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy(sparepart $sparepart)
    {
        $deletesparepart = Sparepart::where('id', $sparepart->id)->delete();

        if ($deletesparepart) {
            return redirect('admin/spareparts')->with('success', 'sparepart store deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}

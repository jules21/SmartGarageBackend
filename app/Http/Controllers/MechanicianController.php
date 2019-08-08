<?php

namespace App\Http\Controllers;

use App\Mechanician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    $mechanicians = Mechanician::all();
    return view('mechanician.index', compact('mechanicians'));
    }

    public function create()
    {
        //
        return view('mechanician.create');
    }
    public function store(Request $request)
    {
        $mechanician = Mechanician::create([
            'names' => $request->get('names'),
            'email'=> $request->get('email'),
            'password'=> Hash::make($request->get('password')),
            'phone'=> $request->get('phone'),
            'address'=> $request->get('address'),
            'location'=> $request->get('location'),
            'garage_id'=> 1,

          ]);
  if($mechanician)
  {
      return back()->with('success', 'You have created new mechanician named '. $mechanician->name);
  }
  else
  {
      return back()->withInput();
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
        $mechanician = Mechanician::find($mechanician->id);
          return view('mechanician.show', compact('mechanician'));

    }


    public function edit(Mechanician $mechanician)
    {
        //
          $mechanician = Mechanician::find($mechanician->id);
          return view('mechanician.edit', compact('mechanician'));
 
    }

    public function update(Request $request, Mechanician $mechanician)
    {
                //
                $Updatemechanician = Mechanician::where('id', $mechanician->id)
                ->update(
            [
                'names' => $request->get('names'),
                'email'=> $request->get('email'),
                'password'=> Hash::make($request->get('password')),
                'phone'=> $request->get('phone'),
                'address'=> $request->get('address'),
                'location'=> $request->get('location'),
                'garage_id'=> 1,
            ]);
              if($Updatemechanician)
                         {      
                          return back()->with('success', 'mechanician updated successful');
                         }
              else
                  return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mechanician  $mechanician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanician $mechanician)
    {
        $deletemechanician = Mechanician::where('id', $mechanician->id)->delete();

        if ($deletemechanician) {
            # code...
            return redirect('admin/mechanicians')->with('success', 'mechanician deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}

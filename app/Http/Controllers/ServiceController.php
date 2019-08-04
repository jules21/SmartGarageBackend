<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
          ]);
        if($service)
        {
            return back()->with('success', 'new service created successful');
        }
        else
        {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $service = Service::find($service->id);
        return view('service.show', compact('service'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::find($service->id);
        return view('service.edit', compact('service'));
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
        $Updateservice = Service::where('id', $service->id)
        ->update(
    [
        'name' => $request->get('name'),
        'description'=> $request->get('description'),
    ]);
      if($Updateservice)
                 {      
                  return back()->with('success', 'service updated successful');
                 }
      else
          return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $deleteservice = Service::where('id', $service->id)->delete();

        if ($deleteservice) {
            return redirect('admin/services')->with('success', 'service deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}

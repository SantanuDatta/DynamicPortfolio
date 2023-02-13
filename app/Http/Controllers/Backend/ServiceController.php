<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
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
        $services = Service::orderBy('id', 'asc')->get();
        return view('backend.pages.service.manage', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->about_id      = 1;
        $service->name          = $request->name;
        $service->description   = $request->description;
        $service->image_link    = $request->image_link;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Service Has Been Added!'
        );

        $service->save();
        return redirect()->route('service.manage')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        if(!is_null($service)){
            return view('backend.pages.service.edit', compact('service'));
        }else{
            //404
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name          = $request->name;
        $service->description   = $request->description;
        $service->image_link    = $request->image_link;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Service Updated Successfully!'
        );

        $service->save();
        return redirect()->route('service.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if(!is_null($service)){
            
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Service Removed Successfully!'
            );
    
            $service->delete();
            return redirect()->route('service.manage')->with($notification);
        }else{
            //404
        }
    }
}

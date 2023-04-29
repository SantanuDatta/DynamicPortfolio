<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::asc('id')->get();
        return view('backend.pages.service.manage', compact('services'));
    }

    public function create()
    {
        return view('backend.pages.service.create');
    }

    public function store(Request $request)
    {
        $service              = new Service();
        $service->about_id    = 1;
        $service->name        = $request->name;
        $service->description = $request->description;
        $service->image_link  = $request->image_link;

        $service->save();
        flash('success', 'Service Has Been Added!');
        return redirect()->route('service.manage');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        if (!is_null($service)) {
            return view('backend.pages.service.edit', compact('service'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $service              = Service::find($id);
        $service->name        = $request->name;
        $service->description = $request->description;
        $service->image_link  = $request->image_link;

        $service->save();
        flash('success', 'Service Updated Successfully!');
        return redirect()->route('service.manage');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if (!is_null($service)) {

            $service->delete();
            flash('error', 'Service Removed Successfully!');
            return redirect()->route('service.manage');
        } else {
            //404
        }
    }
}

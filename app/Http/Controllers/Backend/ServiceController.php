<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\ServiceRequest;
use App\Models\Service;

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

    public function store(ServiceRequest $request)
    {
        $service = Service::create($request->validated());
        flash('success', 'Service Has Been Added!');

        return redirect()->route('service.manage');
    }

    public function edit(Service $service)
    {
        return view('backend.pages.service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        flash('success', 'Service Updated Successfully!');

        return redirect()->route('service.manage');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        flash('error', 'Service Removed Successfully!');

        return redirect()->route('service.manage');
    }
}

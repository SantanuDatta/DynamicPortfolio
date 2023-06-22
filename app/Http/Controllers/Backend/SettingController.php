<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\SettingRequest;
use App\Models\Setting;
use App\Services\SettingService;

class SettingController extends Controller
{
    public function index()
    {
        return view('backend.pages.setting.manage');
    }

    public function update(SettingRequest $request, Setting $setting, SettingService $service)
    {
        $service->update($setting, $request->validated());
        flash('success', 'Settings Have Been Updated!');

        return redirect()->back();
    }
}

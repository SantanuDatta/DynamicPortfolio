<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use File;
use Image;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::where('id', 1)->get();
        return view('backend.pages.setting.manage', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->site_title = $request->site_title;
        $setting->email = $request->email;
        $setting->link = $request->link;
        $setting->phone_no = $request->phone_no;
        $setting->address = $request->address;
        if($request->favicon){
            if(File::exists('backend/img/settings/favicon/' . $setting->favicon)){
                File::delete('backend/img/settings/favicon/' . $setting->favicon);
            }
            $favicon = $request->file('favicon');
            $faviconName = strtolower(str_replace(' ', '-', $setting->site_title)) . '-' .'favicon';
            $faviconImg = $faviconName. '-' .rand() . '.' . $favicon->getClientOriginalExtension();
            $location = public_path('backend/img/settings/favicon/' . $faviconImg);
            $imageResize = Image::make($favicon);
            $imageResize->fit(96, 96)->save($location);
            $setting->favicon = $faviconImg;
        }

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Settings Have Been Updated!',
        );
        $setting->save();
        return redirect()->back()->with($notification);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::where('id', 1)->get();
        return view('backend.pages.about.manage', compact('abouts'));
    }

    public function update(Request $request, $id)
    {
        $about              = About::find($id);
        $about->user_id     = $request->user_id;
        $about->description = $request->description;
        $about->email       = $request->email;
        $about->phone       = $request->phone;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Updated Successfully!',
        ];

        $about->save();
        return redirect()->back()->with($notification);
    }
}

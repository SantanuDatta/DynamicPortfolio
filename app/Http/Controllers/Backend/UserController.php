<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', 1)->get();
        return view('backend.pages.user.detail', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $user             = User::find($id);
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->occupation = $request->occupation;
        if ($request->image) {
            if (File::exists('backend/img/user/' . $user->image)) {
                File::delete('backend/img/user/' . $user->image);
            }
            $image       = $request->file('image');
            $img         = strtolower(str_replace(' ', '-', $user->name)) . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/user/' . $img);
            $imageResize = Image::make($image);
            $imageResize->fit(696, 696, null, 'top')->save($location);
            $user->image = $img;
        }
        if ($request->pdf) {
            if (File::exists('backend/pdf/' . $user->pdf)) {
                File::delete('backend/pdf/' . $user->pdf);
            }
            $pdf       = public_path('backend/pdf/');
            $pdf       = $request->pdf->move($pdf, 'Resume.pdf');
            $pdf       = $pdf . '/Resume.pdf';
            $pdf       = pathinfo($pdf, PATHINFO_BASENAME);
            $user->pdf = $pdf;
        }

        $user->save();
        flash('success', 'Updated Successfully!');
        return back();
    }
}

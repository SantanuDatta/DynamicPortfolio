<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', 1)->get();
        return view('backend.pages.user.detail', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->occupation = $request->occupation;
        if ($request->image) {
            if (File::exists('backend/img/user/' . $user->image)) {
                File::delete('backend/img/user/' . $user->image);
            }
            $image = $request->file('image');
            $img = strtolower(str_replace(' ', '-', $user->name)) . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/user/' . $img);
            $imageResize = Image::make($image);
            $imageResize->fit(696, 696, null, 'top')->save($location);
            $user->image = $img;
        }
        if ($request->pdf) {
            if (File::exists('backend/pdf/' . $user->pdf)) {
                File::delete('backend/pdf/' . $user->pdf);
            }
            $pdf = public_path('backend/pdf/');
            $pdf = $request->pdf->move($pdf, 'Resume.pdf');
            $pdf = $pdf.'/Resume.pdf';
            $pdf = pathinfo($pdf, PATHINFO_BASENAME);
            $user->pdf = $pdf;
        }
        
        $notification = array(
            'alert-type'     => 'success',
            'message'        => 'Updated Successfully!',
        );
        $user->save();
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::orderBy('id', 'asc')->get();
        return view('backend.pages.education.manage', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $education = new Education();
        $education->about_id        = 1;
        $education->studied_at      = $request->studied_at;
        $education->info            = $request->info;
        $education->degree          = $request->degree;
        $education->start_date      = $request->start_date;
        $education->end_date        = $request->end_date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'New Education Added!'
        );

        $education->save();
        return redirect()->route('education.manage')->with($notification);
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
        $education = Education::find($id);
        if(!is_null($education)){
            return view('backend.pages.education.edit', compact('education'));
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
        $education = Education::find($id);
        $education->studied_at      = $request->studied_at;
        $education->info            = $request->info;
        $education->degree          = $request->degree;
        $education->start_date      = $request->start_date;
        $education->end_date        = $request->end_date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Education Updated!'
        );

        $education->save();
        return redirect()->route('education.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        if(!is_null($education)){
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Education Removed Successfully!'
            );
            $education->delete();
            return redirect()->route('education.manage')->with($notification);
        }else{
            //404
        }
    }
}

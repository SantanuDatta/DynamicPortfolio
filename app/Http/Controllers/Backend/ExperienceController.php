<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::orderBy('id', 'asc')->get();
        return view('backend.pages.experience.manage', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = new Experience();
        $experience->about_id       = 1;
        $experience->worked_at      = $request->worked_at;
        $experience->company_info   = $request->company_info;
        $experience->worked_as      = $request->worked_as;
        $experience->start_date     = $request->start_date;
        $experience->end_date       = $request->end_date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'New Experience Added!'
        );

        $experience->save();
        return redirect()->route('experience.manage')->with($notification);
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
        $experience = Experience::find($id);
        if(!is_null($experience)){
            return view('backend.pages.experience.edit', compact('experience'));
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
        $experience = Experience::find($id);
        $experience->worked_at = $request->worked_at;
        $experience->company_info = $request->company_info;
        $experience->worked_as = $request->worked_as;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Experience Updated!'
        );

        $experience->save();
        return redirect()->route('experience.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        if(!is_null($experience)){
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Experience Removed Successfully!'
            );
            $experience->delete();
            return redirect()->route('experience.manage')->with($notification);
        }else{
            //404
        }
    }
}

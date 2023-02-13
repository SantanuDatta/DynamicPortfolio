<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::orderBy('id', 'asc')->get();
        return view('backend.pages.skill.manage', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill();
        $skill->about_id      = 1;
        $skill->name          = $request->name;
        $skill->skill_rate    = $request->skill_rate;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Skill Has Been Added!'
        );

        $skill->save();
        return redirect()->route('skill.manage')->with($notification);
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
        $skill = Skill::find($id);
        if(!is_null($skill)){
            return view('backend.pages.skill.edit', compact('skill'));
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
        $skill = Skill::find($id);
        $skill->name          = $request->name;
        $skill->skill_rate    = $request->skill_rate;

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Skill Updated Successfully!'
        );

        $skill->save();
        return redirect()->route('skill.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        if(!is_null($skill)){
            
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Skill Removed Successfully!'
            );
    
            $skill->delete();
            return redirect()->route('skill.manage')->with($notification);
        }else{
            //404
        }
    }
}

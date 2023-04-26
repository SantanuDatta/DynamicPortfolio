<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('id', 'asc')->get();
        return view('backend.pages.skill.manage', compact('skills'));
    }

    public function create()
    {
        return view('backend.pages.skill.create');
    }

    public function store(Request $request)
    {
        $skill             = new Skill();
        $skill->about_id   = 1;
        $skill->name       = $request->name;
        $skill->skill_rate = $request->skill_rate;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Skill Has Been Added!',
        ];

        $skill->save();
        return redirect()->route('skill.manage')->with($notification);
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        if (!is_null($skill)) {
            return view('backend.pages.skill.edit', compact('skill'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $skill             = Skill::find($id);
        $skill->name       = $request->name;
        $skill->skill_rate = $request->skill_rate;

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Skill Updated Successfully!',
        ];

        $skill->save();
        return redirect()->route('skill.manage')->with($notification);
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (!is_null($skill)) {

            $notification = [
                'alert-type' => 'error',
                'message'    => 'Skill Removed Successfully!',
            ];

            $skill->delete();
            return redirect()->route('skill.manage')->with($notification);
        } else {
            //404
        }
    }
}

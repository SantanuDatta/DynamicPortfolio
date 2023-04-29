<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::asc('id')->get();
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

        $skill->save();
        flash('success', 'Skill Has Been Added!');
        return redirect()->route('skill.manage');
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

        $skill->save();
        flash('success', 'Skill Updated Successfully!');
        return redirect()->route('skill.manage');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (!is_null($skill)) {

            $skill->delete();
            flash('error', 'Skill Removed Successfully!');
            return redirect()->route('skill.manage');
        } else {
            //404
        }
    }
}

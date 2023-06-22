<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\SkillRequest;
use App\Models\Skill;

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

    public function store(SkillRequest $request)
    {
        $skill = Skill::create($request->validated());
        flash('success', 'Skill Has Been Added!');

        return redirect()->route('skill.manage');
    }

    public function edit(Skill $skill)
    {
        return view('backend.pages.skill.edit', compact('skill'));
    }

    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        flash('success', 'Skill Updated Successfully!');

        return redirect()->route('skill.manage');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        flash('error', 'Skill Removed Successfully!');

        return redirect()->route('skill.manage');
    }
}

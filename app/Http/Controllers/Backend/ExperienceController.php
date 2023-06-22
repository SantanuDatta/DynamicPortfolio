<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experience\ExperienceRequest;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::asc('id')->get();

        return view('backend.pages.experience.manage', compact('experiences'));
    }

    public function create()
    {
        return view('backend.pages.experience.create');
    }

    public function store(ExperienceRequest $request)
    {
        $experience = Experience::create($request->validated());
        flash('success', 'New Experience Added!');

        return redirect()->route('experience.manage');
    }

    public function edit(Experience $experience)
    {
        return view('backend.pages.experience.edit', compact('experience'));
    }

    public function update(ExperienceRequest $request, Experience $experience)
    {
        $experience->update($request->validated());
        flash('success', 'Experience Updated!');

        return redirect()->route('experience.manage');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        flash('error', 'Experience Removed Successfully!');

        return redirect()->route('experience.manage');
    }
}

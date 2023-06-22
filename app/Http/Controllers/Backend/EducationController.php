<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\EducationRequest;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::asc('id')->get();

        return view('backend.pages.education.manage', compact('educations'));
    }

    public function create()
    {
        return view('backend.pages.education.create');
    }

    public function store(EducationRequest $request)
    {
        $education = Education::create($request->validated());
        flash('success', 'New Education Added!');

        return redirect()->route('education.manage');
    }

    public function edit(Education $education)
    {
        return view('backend.pages.education.edit', compact('education'));
    }

    public function update(EducationRequest $request, Education $education)
    {
        $education->update($request->validated());
        flash('success', 'Education Updated!');

        return redirect()->route('education.manage');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        flash('error', 'Education Removed Successfully!');

        return redirect()->route('education.manage');
    }
}

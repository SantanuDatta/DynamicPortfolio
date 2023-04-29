<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $education             = new Education();
        $education->about_id   = 1;
        $education->studied_at = $request->studied_at;
        $education->info       = $request->info;
        $education->degree     = $request->degree;
        $education->start_date = $request->start_date;
        $education->end_date   = $request->end_date;

        $education->save();
        flash('success', 'New Education Added!');
        return redirect()->route('education.manage');
    }

    public function edit($id)
    {
        $education = Education::find($id);
        if (!is_null($education)) {
            return view('backend.pages.education.edit', compact('education'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $education             = Education::find($id);
        $education->studied_at = $request->studied_at;
        $education->info       = $request->info;
        $education->degree     = $request->degree;
        $education->start_date = $request->start_date;
        $education->end_date   = $request->end_date;

        $education->save();
        flash('success', 'Education Updated!');
        return redirect()->route('education.manage');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        if (!is_null($education)) {
            $education->delete();
            flash('error', 'Education Removed Successfully!');
            return redirect()->route('education.manage');
        } else {
            //404
        }
    }
}

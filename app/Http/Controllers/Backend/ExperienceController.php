<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $experience               = new Experience();
        $experience->about_id     = 1;
        $experience->worked_at    = $request->worked_at;
        $experience->company_info = $request->company_info;
        $experience->worked_as    = $request->worked_as;
        $experience->start_date   = $request->start_date;
        $experience->end_date     = $request->end_date;

        $experience->save();
        flash('success', 'New Experience Added!');
        return redirect()->route('experience.manage');
    }

    public function edit($id)
    {
        $experience = Experience::find($id);
        if (!is_null($experience)) {
            return view('backend.pages.experience.edit', compact('experience'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $experience               = Experience::find($id);
        $experience->worked_at    = $request->worked_at;
        $experience->company_info = $request->company_info;
        $experience->worked_as    = $request->worked_as;
        $experience->start_date   = $request->start_date;
        $experience->end_date     = $request->end_date;

        $experience->save();
        flash('success', 'Experience Updated!');
        return redirect()->route('experience.manage');
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        if (!is_null($experience)) {
            $experience->delete();
            flash('error', 'Experience Removed Successfully!');
            return redirect()->route('experience.manage');
        } else {
            //404
        }
    }
}

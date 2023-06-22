<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('backend.pages.about.manage', compact('about'));
    }

    public function update(AboutRequest $request, About $about)
    {
        $about->update($request->validated());

        flash('success', 'Updated Successfully!');
        return redirect()->back();
    }
}

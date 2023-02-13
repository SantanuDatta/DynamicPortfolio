<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\NewMail;
use App\Models\About;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::where('id', 1)->get();
        $experiences = Experience::where('about_id', 1)->get();
        $educations = Education::where('about_id', 1)->get();
        $skills = Skill::where('about_id', 1)->orderBy('id', 'asc')->get();
        $services = Service::where('about_id', 1)->orderBy('id', 'asc')->get();
        $certificates = Certificate::where('about_id', 1)->get();
        $cDetails = Category::where('is_featured', 1)->where('status', 1)->get();
        return view('frontend.pages.home', compact('abouts', 'experiences', 'educations', 'skills', 'services', 'certificates', 'cDetails'));
    }

    public function singleProject($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('frontend.pages.single-project', compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $mailData = [
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'message'   => $request->message
        ];

        // Send an email to the admin
        Mail::to('santanudatta94@gmail.com')->send(new NewMail($mailData));

        // Return a success message
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

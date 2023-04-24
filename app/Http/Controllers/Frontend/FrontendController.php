<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\NewMail;
use App\Models\About;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts = About::with(['user', 'experiences', 'educations', 'skills', 'services', 'certificates'])->get();
        $cDetails = Category::with('portfolio')->where('is_featured', 1)->where('status', 1)->get();
        return view('frontend.pages.home', compact('abouts','cDetails'));
    }

    public function singleProject($slug)
    {
        $portfolio = Portfolio::with('category')->where('slug', $slug)->first();
        return view('frontend.pages.single-project', compact('portfolio'));
    }

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
}

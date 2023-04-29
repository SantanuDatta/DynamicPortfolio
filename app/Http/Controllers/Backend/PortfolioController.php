<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->asc('name')->get();
        return view('backend.pages.portfolio.manage', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::asc('name')->get();
        return view('backend.pages.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $portfolio              = new Portfolio();
        $portfolio->category_id = $request->category_id;
        $portfolio->name        = $request->name;
        $portfolio->slug        = Str::slug($request->name);
        $portfolio->description = $request->description;
        $portfolio->job         = $request->job;
        $portfolio->client      = $request->client;
        $portfolio->date        = $request->date;
        $portfolio->company     = $request->company;
        $portfolio->link        = $request->link;
        $portfolio->status      = $request->status;
        if ($request->image) {
            $image       = $request->file('image');
            $img         = rand() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $portfolio->image = $img;
        }

        $portfolio->save();
        flash('success', 'New Portfolio Added!');
        return redirect()->route('portfolio.manage');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        if (!is_null($portfolio)) {
            $categories = Category::asc('name')->get();
            return view('backend.pages.portfolio.edit', compact('portfolio', 'categories'));
        } else {
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $portfolio              = Portfolio::find($id);
        $portfolio->category_id = $request->category_id;
        $portfolio->name        = $request->name;
        $portfolio->slug        = Str::slug($request->name);
        $portfolio->description = $request->description;
        $portfolio->job         = $request->job;
        $portfolio->client      = $request->client;
        $portfolio->date        = $request->date;
        $portfolio->company     = $request->company;
        $portfolio->link        = $request->link;
        $portfolio->status      = $request->status;
        if ($request->image) {
            if (File::exists('backend/img/portfolio/' . $portfolio->image)) {
                File::delete('backend/img/portfolio/' . $portfolio->image);
            }
            $image       = $request->file('image');
            $img         = rand() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $portfolio->image = $img;
        }

        $portfolio->save();
        flash('success', 'Portfolio Updated!');
        return redirect()->route('portfolio.manage');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if (!is_null($portfolio)) {
            if (File::exists('backend/img/portfolio/' . $portfolio->imag)) {
                File::delete('backend/img/portfolio/' . $portfolio->image);
            }

            $portfolio->delete();
            flash('error', 'Portfolio Removed!');
            return redirect()->route('portfolio.manage');

        } else {
            //404
        }
    }
}

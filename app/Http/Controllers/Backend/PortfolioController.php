<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->orderBy('name', 'asc')->get();
        return view('backend.pages.portfolio.manage', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.pages.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio();
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
        if($request->image){
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $portfolio->image = $img;
        }

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'New Portfolio Added!',
        );

        $portfolio->save();
        return redirect()->route('portfolio.manage')->with($notification);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'image',
        ]);
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('backend/img/portfolio'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('backend/img/portfolio/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        if(!is_null($portfolio)){
            $categories = Category::orderBy('name', 'asc')->get();
            return view('backend.pages.portfolio.edit', compact('portfolio', 'categories'));
        }else{
            //404
        }
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
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
        if($request->image){
            if(File::exists('backend/img/portfolio/' . $portfolio->image)){
                File::delete('backend/img/portfolio/' . $portfolio->image);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $portfolio->image = $img;
        }

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Portfolio Updated!',
        );

        $portfolio->save();
        return redirect()->route('portfolio.manage')->with($notification);
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if(!is_null($portfolio)){
            if(File::exists('backend/img/portfolio/' . $portfolio->imag)){
                File::delete('backend/img/portfolio/' . $portfolio->image);
            }
            $notification = array(
                'alert-type'    => 'error',
                'message'       => 'Portfolio Removed!',
            );
            $portfolio->delete();
            return redirect()->route('portfolio.manage')->with($notification);
            
        }else{
            //404
        }
    }
}

<?php

namespace App\Services;

use App\Models\Portfolio;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PortfolioService
{
    public function store(array $data): Portfolio
    {
        $portfolio = Portfolio::create($data);
        if (request()->hasFile('image')) {
            $image       = request()->file('image');
            $img         = rand() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $portfolio->image = $img;
            $portfolio->save();
        }

        return $portfolio;
    }

    public function update(Portfolio $portfolio, array $data): Portfolio
    {
        if (request()->hasFile('image')) {
            if (File::exists('backend/img/portfolio/' . $portfolio->image)) {
                File::delete('backend/img/portfolio/' . $portfolio->image);
            }
            $image       = request()->file('image');
            $img         = rand() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/portfolio/' . $img);
            $imageResize = Image::make($image);
            $imageResize->resize(700, 525)->save($location);
            $data['image'] = $img;
        }
        $portfolio->update($data);

        return $portfolio;
    }

    public function delete(Portfolio $portfolio)
    {
        if (File::exists('backend/img/portfolio/' . $portfolio->image)) {
            File::delete('backend/img/portfolio/' . $portfolio->image);
        }
        $portfolio->delete();
    }
}

<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UserService
{
    public function update(User $user, array $data): User
    {
        if (request()->hasFile('image')) {
            if (File::exists('backend/img/user/' . $user->image)) {
                File::delete('backend/img/user/' . $user->image);
            }
            $image       = request()->file('image');
            $img         = uniqid() . '.' . $image->getClientOriginalExtension();
            $location    = public_path('backend/img/user/' . $img);
            $imageResize = Image::make($image);
            $imageResize->fit(696, 696, null, 'top')->save($location);
            $data['image'] = $img;
        }
        if (request()->hasFile('pdf')) {
            if (File::exists('backend/pdf/' . $user->pdf)) {
                File::delete('backend/pdf/' . $user->pdf);
            }
            $pdf         = public_path('backend/pdf/');
            $pdf         = request()->pdf->move($pdf, 'Resume.pdf');
            $pdf         = $pdf . '/Resume.pdf';
            $pdf         = pathinfo($pdf, PATHINFO_BASENAME);
            $data['pdf'] = $pdf;
        }
        $user->update($data);

        return $user;
    }
}

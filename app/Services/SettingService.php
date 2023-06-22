<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SettingService
{
    public function update( Setting $setting, array $config): Setting
    {
        if (request()->hasFile('favicon')) {
            if (File::exists('backend/img/settings/favicon/' . $setting->favicon)) {
                File::delete('backend/img/settings/favicon/' . $setting->favicon);
            }
            $favicon     = request()->file('favicon');
            $faviconImg  = rand() . '.' . $favicon->getClientOriginalExtension();
            $location    = public_path('backend/img/settings/favicon/' . $faviconImg);
            $imageResize = Image::make($favicon);
            $imageResize->fit(96, 96)->save($location);
            $config['favicon'] = $faviconImg;
        }
        $setting->update($config);

        return $setting;
    }
}

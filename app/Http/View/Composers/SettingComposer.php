<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class SettingComposer
{
    public function compose(View $view)
    {
        $settings = Cache::remember('settings', now()->addDays(7), function () {
            return Setting::first();
        });
        $view->with('settings', $settings);
    }
}

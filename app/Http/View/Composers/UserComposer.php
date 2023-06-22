<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $users = Cache::remember('users', now()->addDays(7), function () {
            return User::first();
        });
        $view->with('users', $users);
    }
}

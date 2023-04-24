<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $users = Cache::remember('users', now()->addDay(), function () {
            return User::where('id', 1)->first();
        });
        $view->with('users', $users);
    }
}

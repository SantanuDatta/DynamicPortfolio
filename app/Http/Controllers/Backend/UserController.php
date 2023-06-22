<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(1);

        return view('backend.pages.user.detail', compact('users'));
    }

    public function update(UserRequest $request, User $user, UserService $data)
    {
        $data->update($user, $request->validated());
        flash('success', 'Updated Successfully!');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AdminLink;
use App\Models\User;
use App\Models\UserLink;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('web.home');
    }

    public function user($username)
    {
        $user = User::where('user_name', $username)->first();
        if (!$user) {
            abort(404);
        }
        $userLink = UserLink::where('user_id', $user->id)->first();
        $adminLinks = AdminLink::where('admin_id', 1)->first();
        return view('web.user', compact('user', 'userLink', 'adminLinks'));
    }
}

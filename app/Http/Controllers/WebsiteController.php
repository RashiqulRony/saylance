<?php

namespace App\Http\Controllers;

use App\Models\AdminLink;
use App\Models\User;
use App\Models\UserBudget;
use App\Models\UserLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function index()
    {
        $adminLinks = AdminLink::where('admin_id', 1)->first();
        return view('web.home', compact('adminLinks'));
    }

    public function user($username)
    {
        $user = User::where('user_name', $username)->first();
        if (!$user) {
            abort(404);
        }

        $userLink = UserLink::where('user_id', $user->id)->first();
        $adminLink = AdminLink::where('admin_id', 1)->first();
        $links = [];
        if ($userLink->link) {
            $links[] = $userLink->link;
            $index = 0;
        }
        if ($adminLink->bottom_link) {
            $links[] = $adminLink->bottom_link;
            $index = 1;
        }
        if ($adminLink->image_link) {
            $links[] = $adminLink->image_link;
            $index = 2;
        }
        if ($adminLink->text_link) {
            $links[] = $adminLink->text_link;
            $index = 3;
        }
        if ($adminLink->ad_link) {
            $links[] = $adminLink->ad_link;
            $index = 4;
        }
        $index = mt_rand(0, $index);
        $adUrl = $links[$index];

        return view('web.user', compact('user', 'adUrl'));
    }

    public function shuffleLink($arr)
    {
        if (!is_array($arr)) return $arr;

        $keys = array_keys($arr);
        shuffle($keys);
        $random = array();
        foreach ($keys as $key) {
            $random[$key] = $arr[$key];
        }
        return $random[1];
    }

    public function budgetStore(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'budget' => ['required', 'numeric', 'max:255'],
        ]);

        UserBudget::create([
            'name' => $request->name,
            'email' => $request->email,
            'budget' => $request->budget,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Budget save successfully');
    }
}

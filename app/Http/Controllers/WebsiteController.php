<?php

namespace App\Http\Controllers;

use App\Models\AdminLink;
use App\Models\User;
use App\Models\UserBudget;
use App\Models\UserLink;
use App\Trait\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{

    use Helper;

    public function index()
    {
        $adminLinks = AdminLink::where('admin_id', 1)->first();
        return view('web.home', compact('adminLinks'));
    }

    public function user($username)
    {
        $ip = request()->ip();
        $user = User::where('user_name', $username)->first();
        if (!$user) {
            abort(404);
        }
        $userLink = UserLink::where('user_id', $user->id)->first();

        if ($userLink) {
            $adminLink = AdminLink::where('admin_id', 1)->first();
            $links = [];
            if ($userLink->link) {
                $links[] = $userLink->link;
            }
            if ($adminLink->bottom_link) {
                $links[] = $adminLink->bottom_link;
            }
            if ($adminLink->image_link) {
                $links[] = $adminLink->image_link;
            }
            if ($adminLink->text_link) {
                $links[] = $adminLink->text_link;
            }
            if ($adminLink->ad_link) {
                $links[] = $adminLink->ad_link;
            }
            $al = $this->storeLink($links, $ip);
            if ($al['data']) {
                $adUrl = $al['data']->links;
            } else {
                $adUrl = null;
            }

            return view('web.user', compact('user', 'adUrl'));
        } else {
            abort(500);
        }

    }

    public function budgetStore(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'budget' => ['required', 'numeric', 'max:255'],
        ]);

        $data = UserBudget::create([
            'name' => $request->name,
            'email' => $request->email,
            'budget' => $request->budget,
            'description' => $request->description,
        ]);

        if ($data) {
            Mail::send('emails.test', compact($data), function ($message) use ($data) {
                $message->to($data->email)->subject('Budget from saylance')->from('saylzfkp@saylance.com');
            });
        }

        return redirect()->back()->with('success', 'Budget save successfully');
    }
}

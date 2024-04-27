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
        return view('web.home');
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
            $adminLinks = AdminLink::get();
            $links = [];
            if ($userLink->link) {
                $links[] = $userLink->link;
            }

            if (count($adminLinks) > 0) {
                foreach ($adminLinks as $adminLink) {
                    $links[] = $adminLink->ad_link;
                }
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

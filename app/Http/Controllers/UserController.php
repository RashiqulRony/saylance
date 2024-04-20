<?php

namespace App\Http\Controllers;

use App\Models\UserLink;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        $data = null;
        if ($request->update) {
            $data = UserLink::with('user')->where('user_id', auth('web')->id())->find($request->update);
        }
        $links = UserLink::with('user')->where('user_id', auth('web')->id())->get();
        return view('user.home', compact('data', 'links'));
    }

    public function linkStore(Request $request)
    {
        $this->validate($request, [
            'link' => ['required', 'string', 'max:255'],
        ]);

        UserLink::updateOrCreate(
            [
                'user_id' => auth('web')->id(),
            ], [
                'link' => $request->link,
                'status' => 'Active',
            ]
        );

        return redirect(route('user.home'))->with('success', 'Link Save successfully');
    }

    public function linkDelete($linkId)
    {
        $data = UserLink::with('user')->where('user_id', auth('web')->id())->find($linkId);
        if ($data) {
            $data->delete();
            return redirect(route('user.home'))->with('success', 'Link Delete successfully');
        } else {
            return redirect(route('user.home'))->with('error', 'Data not Found');
        }
    }
}

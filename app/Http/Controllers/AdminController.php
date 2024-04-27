<?php

namespace App\Http\Controllers;

use App\Models\AdLink;
use App\Models\AdminLink;
use App\Models\User;
use App\Models\UserBudget;
use App\Trait\Helper;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    use Helper;

    public function home()
    {
        $adminLink = AdminLink::count();
        $totalUser = User::count();
        $totalBudget = UserBudget::count();
        return view('admin.home', compact('adminLink', 'totalUser', 'totalBudget'));
    }

    public function links()
    {
        $data = null;
        $links = AdminLink::all();
        return view('admin.links', compact('links', 'data'));
    }

    public function linkStore(Request $request)
    {
        $this->validate($request, [
            'link' => ['required'],
        ]);

        AdminLink::create([
            'admin_id' => 1,
            'ad_link' => $this->linkCheck($request->link)
        ]);

        return redirect()->back()->with('success', 'Admin Link save successfully');
    }

    public function linkEdit($linkId)
    {
        $data = AdminLink::find($linkId);
        if ($data) {
            $links = AdminLink::all();
            return view('admin.links', compact('links', 'data'));
        } else {
            abort(404);
        }
    }

    public function linkUpdate(Request $request, $linkId)
    {
        $data = AdminLink::find($linkId);

        if ($data) {
            $data->update([
                'admin_id' => 1,
                'ad_link' => $this->linkCheck($request->link)
            ]);
            return redirect(route('admin.links'))->with('success', 'Admin Link Update successfully');
        } else {
            abort(404);
        }
    }

    public function linkDelete($linkId)
    {
        AdminLink::find($linkId)->delete();
        return redirect(route('admin.links'))->with('success', 'Admin Link Delete successfully');
    }

    public function users(Request $request)
    {
        $sql = User::where('role', 'User');
        if ($request->key) {
            $sql->where('name', 'LIKE', "%$request->key%");
            $sql->orWhere('user_name', 'LIKE', "%$request->key%");
            $sql->orWhere('email', 'LIKE', "%$request->key%");
            $sql->orWhere('location', 'LIKE', "%$request->key%");
            $sql->orWhere('phone_number', 'LIKE', "%$request->key%");
        }
        $users = $sql->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function budgets(Request $request)
    {
        $sql = UserBudget::orderBy('id', 'DESC');
        if ($request->key) {
            $sql->where('name', 'LIKE', "%$request->key%");
            $sql->orWhere('email', 'LIKE', "%$request->key%");
            $sql->orWhere('budget', 'LIKE', "%$request->key%");
            $sql->orWhere('description', 'LIKE', "%$request->key%");
        }
        $budgets = $sql->paginate(10);

        return view('admin.budgets', compact('budgets'));
    }
}

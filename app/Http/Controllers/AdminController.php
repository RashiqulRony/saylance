<?php

namespace App\Http\Controllers;

use App\Models\AdminLink;
use App\Trait\Helper;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    use Helper;

    public function home()
    {
        $data = AdminLink::first();
        return view('admin.home', compact('data'));
    }

    public function linkStore(Request $request)
    {
        AdminLink::updateOrCreate(
            [
                'admin_id' => 1
            ], [
                'bottom_link' => $request->bottom_link ? $this->linkCheck($request->bottom_link) : null,
                'image_link' => $request->image_link ? $this->linkCheck($request->image_link) : null,
                'text_link' => $request->text_link ? $this->linkCheck($request->text_link) : null,
                'ad_link' => $request->ad_link ? $this->linkCheck($request->ad_link) : null,
            ]
        );

        return redirect()->back()->with('success', 'Admin Link save successfully');
    }
}

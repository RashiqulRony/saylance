<?php

namespace App\Http\Controllers;

use App\Models\AdminLink;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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


    private function linkCheck($link)
    {
        if (substr($link, 0, 7) == "http://") {
            $url = $link;
        }elseif (substr($link, 0, 8) == "https://") {
            $url = $link;
        }elseif (substr($link, 0, 4) == "www.") {
            $url = "http://$link";
        } else {
            $url = "http://$link";
        }
        return $url;
    }

}

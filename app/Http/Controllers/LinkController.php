<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function create_link()
    {
        return view('create_link');
    }

    public function manage_links()
    {
        $authid = Auth::user()->id;
        $links = Link::where('sender_id', '=', $authid) ->orderBy('id', 'desc')->get();
        return view('manage_links',['links' => $links]);
    }

    public function manage_links_students()
    {
        $authid = Auth::user()->grade;
        $links = Link::where('grade', '=', $authid)->orderBy('id', 'desc')->get();
        return view('manage_links_students',['links' => $links]);
    }

    public function save_link(Request $request)
    {
        $request->validate([
            'grade' => 'required',
            'link' => 'required'
        ]);

        $link = new Link();
        $link->sender_id = Auth::user()->id;
        $link->grade = $request->input('grade');
        $link->link = $request->input('link');
        $link->save();

        return redirect()->back()->with('status', 'Link Sent Sucessfully');
    }

    public function link_delete($id)
    {
        DB::table('links')->where('id', $id)->delete();
        // return redirect()->back()->with('project_diactivate_status', 'Project Delete Sucessfully');
    }

}

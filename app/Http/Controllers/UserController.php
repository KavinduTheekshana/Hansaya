<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users()
    {
        $users = User::where('is_admin', '=', 0)->get();
        $userscount = User::where('is_admin', '=', 0)->count();
        return view('users', ['users' => $users, 'userscount' => $userscount]);
    }

    public function user_diactivate($user)
    {
        $task = user::find($user);
        $task->status = false;
        $task->save();
        return redirect()->back()->with('statusdiactive', 'Profile Was Diactivated Sucessfully');
    }

    public function user_activate($user)
    {
        $task = user::find($user);
        $task->status = true;
        $task->save();
        return redirect()->back()->with('statusactive', 'Profile Was Activated Sucessfully');
    }

    public function user_delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        // return redirect()->back()->with('project_diactivate_status', 'Project Delete Sucessfully');
    }

    
}

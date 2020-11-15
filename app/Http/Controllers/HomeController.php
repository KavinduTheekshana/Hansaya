<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $inactive_users = User::where('status', '=', '0')->count();
        $active_users = User::where('status', '=', '1')->count();
        $pdffiles_count = File::where('extension', '=', 'pdf')->count();
        $wordfiles_count = File::where('extension', '=', 'doc')->orwhere('extension', '=', 'docx')->count();
        return view('adminHome', [
            'inactive_users' => $inactive_users, 'active_users' => $active_users,
            'pdffiles_count' => $pdffiles_count, 'wordfiles_count' => $wordfiles_count
        ]);
    }

    public function userHome()
    {
        $inactive_users = User::where('status', '=', '0')->count();
        $active_users = User::where('status', '=', '1')->count();
        $pdffiles_count = File::where('extension', '=', 'pdf')->count();
        $wordfiles_count = File::where('extension', '=', 'doc')->orwhere('extension', '=', 'docx')->count();
        return view('userHome', [
            'inactive_users' => $inactive_users, 'active_users' => $active_users,
            'pdffiles_count' => $pdffiles_count, 'wordfiles_count' => $wordfiles_count
        ]);
    }
}

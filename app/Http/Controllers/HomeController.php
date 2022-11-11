<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

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
        return view('user.home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return redirect('admin/dashboard');
    }

    // for view page route
    function create()
    {
        return view('admin.create');
    }

    function dashboard()
    {
        return view('admin.dashboard');
    }

    function profile()
    {
        return view('admin.profile');
    }
    function archive()
    {
        return view('admin.archive');
    }
    
}

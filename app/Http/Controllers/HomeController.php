<?php

namespace App\Http\Controllers;

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
        if (auth()->user()->type == USER_TYPE_SUPER_ADMIN) {
            return redirect()->route('super-admin.dashboard');
        } elseif (auth()->user()->type == USER_TYPE_ADMIN) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->type == USER_TYPE_TEACHER) {
            return redirect()->route('teacher.dashboard');
        } elseif (auth()->user()->type == USER_TYPE_STAFF) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->type == USER_TYPE_STUDENT) {
            return redirect()->route('student.dashboard');
        } elseif (auth()->user()->type == USER_TYPE_PARENT) {
            return redirect()->route('parent.dashboard');
        }
        // return view('home');
    }
}

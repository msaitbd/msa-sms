<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('super_admin.admin.index');
    }

    public function create()
    {
        return view('super_admin.admin.create');
    }
}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Module\AdminModule;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $adminModule;
    public function __construct()
    {
        $this->adminModule = new AdminModule;
    }

    public function index()
    {
        return view('super_admin.admin.index');
    }

    public function create()
    {
        return view('super_admin.admin.create');
    }

    public function store(AdminRequest $request)
    {
        return $this->adminModule->store($request);
    }
}

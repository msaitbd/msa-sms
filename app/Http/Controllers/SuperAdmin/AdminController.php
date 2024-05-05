<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Module\AdminModule;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public $adminModule;

    public function __construct()
    {
        $this->adminModule = new AdminModule;
    }

    public function index()
    {
        $data['admins'] = $this->adminModule->getAll();
        return view('super_admin.admin.index', $data);
    }

    public function create()
    {
        return view('super_admin.admin.create');
    }

    public function store(AdminRequest $request)
    {
        $data = $this->adminModule->store($request);
        if ($data->getData()->status == true) {
            return redirect()->route('super-admin.admin.index')->with('success', $data->getData()->message);
        } else {
            return redirect()->back()->with('error', $data->getData()->message);
        }
    }

    public function edit($id)
    {
        $data['school'] = $this->adminModule->getById($id);
        return view('super_admin.admin.edit', $data);
    }
}

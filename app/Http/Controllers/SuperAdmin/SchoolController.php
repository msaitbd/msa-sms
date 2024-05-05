<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Module\AdminModule;
use App\Http\Module\SchoolModule;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller
{
    public $schoolModule, $adminModule;

    public function __construct()
    {
        $this->schoolModule = new SchoolModule;
        $this->adminModule = new AdminModule;
    }

    public function index()
    {
        $data['schools'] = $this->schoolModule->getAll();
        return view('super_admin.schools.index', $data);
    }

    public function create()
    {
        $data['admins'] = $this->adminModule->getAll();
        return view('super_admin.schools.create', $data);
    }

    public function edit($id)
    {
        $data['school'] = $this->schoolModule->getById($id);
        $data['admins'] = $this->adminModule->getAll();
        return view('super_admin.schools.edit', $data);
    }

    public function store(SchoolRequest $request)
    {
        $data = $this->schoolModule->store($request);
        if ($data->getData()->status == true) {
            return redirect()->route('super-admin.school.index')->with('success', $data->getData()->message);
        } else {
            return redirect()->back()->with('error', $data->getData()->message);
        }
    }
}

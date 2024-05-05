<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Module\SchoolModule;
use App\Http\Requests\SchoolRequest;

class SettingsController extends Controller
{
    public $adminSchoolModule;

    public function __construct()
    {
        $this->adminSchoolModule = new SchoolModule;
    }

    public function school()
    {
        $data['schools'] = $this->adminSchoolModule->getAll();
        return view('admin.settings.school.index', $data);
    }

    public function schoolEdit($id)
    {
        $data['school'] = $this->adminSchoolModule->getById($id);
        return view('admin.settings.school.edit', $data);
    }

    public function schoolUpdate(SchoolRequest $request)
    {
        $data = $this->adminSchoolModule->store($request);
        if ($data->getData()->status == true) {
            return redirect()->route('admin.settings.school')->with('success', $data->getData()->message);
        } else {
            return redirect()->back()->with('error', $data->getData()->message);
        }
    }
}

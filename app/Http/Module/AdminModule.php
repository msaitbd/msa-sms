<?php

namespace App\Http\Module;

use App\Models\AdminSchool;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminModule
{
    public function getAll()
    {
        $data = AdminSchool::query()
            ->orderByDesc('id')
            ->get();
        return $data;
    }
    public function store($request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->first_name . ' ' . $request->last_name;
            $user->name = $request->last_name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->created_by = auth()->id();
            $user->save();
            $user->admin_id = $user->id;
            $user->save();

            $adminSchool = new AdminSchool();
            $adminSchool->admin_id = $user->id;
            $adminSchool->school_name = $request->school_name;
            $adminSchool->school_name = $request->school_name;
            $adminSchool->service_charge = $request->service_charge;
            $adminSchool->install_fee = $request->install_fee;
            $adminSchool->created_by = auth()->id();
            $adminSchool->save();
            DB::commit();
            return redirect()->route('super-admin.admin.index')->with('success', 'Admin School Created Successfully');
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}

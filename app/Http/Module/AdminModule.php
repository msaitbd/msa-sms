<?php

namespace App\Http\Module;

use App\Models\AdminSchool;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminModule
{
    public function getAll()
    {
        $data = AdminSchool::query()
            ->with('admin')
            ->orderByDesc('id')
            ->get();
        return $data;
    }
    public function store($request)
    {
        DB::beginTransaction();
        try {
            if ($request->id && $request->user_id) {
                $user = User::findOrFail($request->user_id);
                $adminSchool = AdminSchool::findOrFail($request->id);
                if ($request->password) {
                    $user->password = Hash::make($request->password);
                }
            } else {
                $user = new User();
                $adminSchool = new AdminSchool();
                $user->password = Hash::make($request->password ?? 123456);
            }
            $user->first_name = $request->first_name;
            $user->last_name = $request->first_name . ' ' . $request->last_name;
            $user->name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->created_by = auth()->id();
            $user->save();
            $user->admin_id = $user->id;
            $user->save();

            $adminSchool->admin_id = $user->id;
            $adminSchool->school_name = $request->school_name;
            $adminSchool->school_name = $request->school_name;
            $adminSchool->service_charge = $request->service_charge;
            $adminSchool->install_fee = $request->install_fee;
            $adminSchool->address = $request->address;
            $adminSchool->created_by = auth()->id();
            $adminSchool->save();
            DB::commit();
            return redirect()->route('super-admin.admin.index')->with('success', 'Admin School Created Successfully');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }

    public function schoolGetById($id)
    {
        return AdminSchool::query()
            ->with('admin')
            ->findOrFail($id);
    }
}

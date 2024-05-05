<?php

namespace App\Http\Module;

use App\Models\User;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminModule
{
    use ResponseTrait;
    public function getAll()
    {
        $data = User::query()
            ->where('type', USER_TYPE_ADMIN)
            ->orderByDesc('id')
            ->get();
        return $data;
    }

    public function getById($id)
    {
        return User::query()
            ->when(auth()->user()->type != USER_TYPE_SUPER_ADMIN, function ($q) {
                $q->where('admin_id', auth()->id());
            })
            ->findOrFail($id);
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            if ($request->id) {
                $user = User::findOrFail($request->id);
                if ($request->password) {
                    $user->password = Hash::make($request->password);
                }
            } else {
                $user = new User();
                $user->password = Hash::make($request->password ?? 123456);
            }
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->type = USER_TYPE_ADMIN;
            $user->status = USER_STATUS_ACTIVE;
            $user->created_by = auth()->id();
            $user->save();
            $user->admin_id = $user->id;
            $user->save();

            DB::commit();
            return $this->success([], __('Admin Created Successfully'));
        } catch (Exception $e) {
            DB::rollBack();
            return $this->error([], getResponseMessage($e, $e->getMessage()));
        }
    }
}

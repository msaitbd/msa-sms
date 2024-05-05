<?php

namespace App\Http\Module;

use App\Models\School;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Support\Facades\DB;

class SchoolModule
{
    use ResponseTrait;
    public function getAll()
    {
        $data = School::query()
            ->when(auth()->user()->type != USER_TYPE_SUPER_ADMIN, function ($q) {
                $q->where('admin_id', auth()->id());
            })
            ->with('admin')
            ->orderBy('admin_id', 'asc')
            ->get();
        return $data;
    }

    public function getById($id)
    {
        $data = School::query()
            ->when(auth()->user()->type != USER_TYPE_SUPER_ADMIN, function ($q) {
                $q->where('admin_id', auth()->id());
            })
            ->with('admin')
            ->orderByDesc('id')
            ->findOrFail($id);
        return $data;
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            if ($request->id) {
                $school = School::query()
                    ->when(auth()->user()->type != USER_TYPE_SUPER_ADMIN, function ($q) {
                        $q->where('admin_id', auth()->id());
                    })
                    ->findOrFail($request->id);
            } else {
                $school = new School();
            }

            $school->admin_id = auth()->user()->type == USER_TYPE_SUPER_ADMIN ? $request->admin_id : auth()->id();
            $school->name = $request->name;
            $school->email = $request->email;
            $school->phone = $request->phone;
            $school->address = $request->address;
            if (auth()->user()->type == USER_TYPE_SUPER_ADMIN) {
                $school->service_charge = $request->service_charge;
                $school->install_fee = $request->install_fee;
            }
            $school->created_by = auth()->id();
            $school->save();
            DB::commit();
            $message = $request->id ? 'School Updated Successfully' : 'School Created Successfully';
            return $this->success([], __($message));
        } catch (Exception $e) {
            DB::rollBack();
            return $this->error([], getResponseMessage($e, $e->getMessage()));
        }
    }
}

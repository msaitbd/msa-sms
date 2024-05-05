<?php

namespace App\Http\Module;

use App\Models\User;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileModule
{
    use ResponseTrait;

    public function profileDetails()
    {
        $data = User::query()->findOrFail(auth()->id());
        return $data;
    }

    public function profileUpdate($request)
    {
        try {
            $profile = $this->profileDetails();
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->email = $request->email;
            $profile->phone = $request->phone;
            $profile->save();
            DB::commit();
            return $this->success([], __('Profile Updated Successfully'));
        } catch (Exception $e) {
            DB::rollBack();
            return $this->error([], getResponseMessage($e, $e->getMessage()));
        }
    }
}

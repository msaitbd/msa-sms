<?php

namespace App\Http\Controllers;

use App\Http\Module\ProfileModule;
use App\Http\Requests\ProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public $profileModule;

    public function __construct()
    {
        $this->profileModule = new ProfileModule;
    }
    public function index()
    {
        $data['user'] = User::findOrFail(auth()->id());
        return view('common.profile.edit_profile', $data);
    }

    public function update(ProfileRequest $request)
    {
        $data = $this->profileModule->profileUpdate($request);

        if ($data->getData()->status == true) {
            return redirect()->route('profile.index')->with('success', $data->getData()->message);
        } else {
            return redirect()->back()->with('error', $data->getData()->message);
        }
    }
}

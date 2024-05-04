<?php

namespace App\Http\Module;

use Exception;
use Illuminate\Support\Facades\DB;

class AdminModule
{
    public function store($request)
    {
        DB::beginTransaction();
        try {
            dd($request->all());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminSchool extends Model
{
    use HasFactory, SoftDeletes;

    public function admin()
    {
        return $this->hasOne(User::class, 'id', 'admin_id');
    }
}

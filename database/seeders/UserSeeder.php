<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'phone' => '1234567890',
            'type' => 1,
            'status' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}

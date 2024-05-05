<?php

namespace Database\Seeders;

use App\Models\School;
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
        $userData = [
            ['admin_id' => null, 'first_name' => 'Super', 'last_name' => 'Admin', 'name' => 'Super Admin', 'email' => 'superadmin@gmail.com', 'phone' => '01234567890', 'type' => USER_TYPE_SUPER_ADMIN, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['admin_id' => 2, 'first_name' => 'Admin', 'last_name' => 'School', 'name' => 'Admin School', 'email' => 'admin@gmail.com', 'phone' => '01234567891', 'type' => USER_TYPE_ADMIN, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['admin_id' => 2, 'first_name' => 'Teacher', 'last_name' => 'School', 'name' => 'Teacher School', 'email' => 'teacher@gmail.com', 'phone' => '01234567892', 'type' => USER_TYPE_TEACHER, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['admin_id' => 2, 'first_name' => 'Staff', 'last_name' => 'School', 'name' => 'Staff School', 'email' => 'staff@gmail.com', 'phone' => '01234567893', 'type' => USER_TYPE_STAFF, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['admin_id' => 2, 'first_name' => 'Student', 'last_name' => 'School', 'name' => 'Student School', 'email' => 'student@gmail.com', 'phone' => '01234567894', 'type' => USER_TYPE_STUDENT, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['admin_id' => 2, 'first_name' => 'Parent', 'last_name' => 'School', 'name' => 'Parent School', 'email' => 'parent@gmail.com', 'phone' => '01234567895', 'type' => USER_TYPE_PARENT, 'status' => USER_STATUS_ACTIVE, 'email_verified_at' => now(), 'password' => Hash::make('password')],
        ];
        User::insert($userData);

        School::create([
            'admin_id' => 2,
            'name' => 'Msait Institute',
            'address' => 'Mokhless Plaza, Savar Dhaka',
            'status' => STATUS_ACTIVE,
            'service_charge' => 500,
            'install_fee' => 5000,
            'created_by' => 1,
        ]);
    }
}

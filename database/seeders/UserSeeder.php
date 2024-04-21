<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'user_name' => "admin",
            'email' => "admin@admin.com",
            'phone_number' => "00000000000",
            'location' => "Dhaka, Bangladesh",
            'password' => bcrypt('adminpassword'),
            'email_verified_at' => now(),
            'role' => "Admin",
            'status' => "Active",
        ]);
    }
}

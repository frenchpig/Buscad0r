<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@demo.cl',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'force_password_change' => false
        ]);

        User::create([
            'name' => 'Test User 1',
            'email' => 'test1@demo.cl',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'force_password_change' => false
        ]);
        
        User::create([
            'name' => 'Test User 2',
            'email' => 'test2@demo.cl',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'force_password_change' => false
        ]);
    }
}

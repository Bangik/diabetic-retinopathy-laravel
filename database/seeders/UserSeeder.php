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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => app('hash')->make('admin'),
            'id_number' => '123456789',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'password' => app('hash')->make('doctor'),
            'id_number' => '123456788',
            'role' => 'doctor',
        ]);

        User::create([
            'name' => 'Patien',
            'email' => 'patien@gmail.com',
            'password' => app('hash')->make('patien'),
            'id_number' => '123456787',
            'role' => 'patien',
        ]);
    }
}

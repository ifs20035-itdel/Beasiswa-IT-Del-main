<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'user_id' => 1000,
            'username'=> 'admin',
            'email' => 'admin@gmail',
            // 'password' => "admin123",
            'role' => 'admin',
            'remember_token' => 'admin123ajsdhas123123f'
        ]);
    }
}

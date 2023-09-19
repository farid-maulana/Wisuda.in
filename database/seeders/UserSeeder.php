<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => Factory::create('id')->name,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

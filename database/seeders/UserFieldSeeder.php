<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserField;


class UserFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UserField::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}

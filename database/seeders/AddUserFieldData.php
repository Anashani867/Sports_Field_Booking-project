<?php

namespace Database\Seeders;

use App\Models\UserField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AddUserFieldData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserField::create([
            'name' => "Belal Shakra",
            'email' => "belal@shakra.com",
            'password' => Hash::make('B123456789'),
        ]);
    }
}

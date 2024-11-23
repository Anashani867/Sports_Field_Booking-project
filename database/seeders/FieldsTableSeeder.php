<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Field;


class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'field_name' => 'Soccer Field A',
            'location' => 'Downtown Park',
            'availability' => '9:00 AM - 5:00 PM',
            'price' => 50.00,
            'owner_id' => 1, // استبدل بمعرف المالك المناسب
            'admin_id' => 1, // استبدل بمعرف المشرف المناسب
            'status' => 'active',
        ]);

        Field::create([
            'field_name' => 'Basketball Court 1',
            'location' => 'Sports Complex',
            'availability' => '10:00 AM - 6:00 PM',
            'price' => 40.00,
            'owner_id' => 2, // استبدل بمعرف المالك المناسب
            'admin_id' => 1, // استبدل بمعرف المشرف المناسب
            'status' => 'active',
        ]);
    }
    }

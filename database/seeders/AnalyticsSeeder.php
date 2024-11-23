<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageView;
use App\Models\BounceRate;

class AnalyticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageView::create([
            'date' => '2024-11-01',
            'views' => 150
        ]);
        PageView::create([
            'date' => '2024-11-02',
            'views' => 200
        ]);

        // Create sample BounceRate data
        BounceRate::create([
            'date' => '2024-11-01',
            'rate' => 45.5
        ]);
        BounceRate::create([
            'date' => '2024-11-02',
            'rate' => 42.3
        ]);
    }

}

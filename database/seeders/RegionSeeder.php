<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            'americas',
            'emea',
            'pacific',
            'china'
        ];

        collect($regions)->each(function ($region) {
            Region::create([
                'name' => $region
            ]);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $americasTeams = [
            '100 thieves',
            'cloud 9',
            'furia',
            'leviatan',
            'evil geniuses',
            'sentinels',
        ];

        $emeaTeams = [
            'team liquid',
            'fnatic',
            'fut esports',
            ''
        ];

        $pacificTeams = [
            'paper rex',
            'drx',
        ];

        $chinaTeams = [
            'edward gaming',
            'fpx'
        ];

        collect($americasTeams)->each(function ($team) {
            $americas = Region::where('name', 'americas')->first();

            Team::create([
                'name' => $team,
                'region_id' => $americas->id
            ]);
        });
    }
}

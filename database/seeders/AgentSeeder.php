<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    public function run()
    {
        $sentinels = [
            'sage',
            'killjoy',
            'deadlock',
            'cypher',
            'deadlock'
        ];

        $controllers = [
            'astra',
            'omen',
            'harbor',
            'viper',
            'brimstone'
        ];

        $duelists = [
            'iso',
            'neon',
            'jett',
            'raze',
            'phoenix',
            'reyna',
            'yoru'
        ];

        $initiators = [
            'kay/o',
            'gekko',
            'breach',
            'fade',
            'sova',
            'skye'
        ];

        $this->createAgents($initiators, \App\Enums\AgentRoleEnum::INITIATOR);
        $this->createAgents($duelists, \App\Enums\AgentRoleEnum::DUELIST);
        $this->createAgents($sentinels, \App\Enums\AgentRoleEnum::SENTINEL);
        $this->createAgents($controllers, \App\Enums\AgentRoleEnum::CONTROLLER);
    }

    protected function createAgents(array $agents, \App\Enums\AgentRoleEnum $role)
    {
        collect($agents)->each(function ($agent) use ($role) {
            Agent::create([
                'name' => $agent,
                'role' => $role,
            ]);
        });
    }
}

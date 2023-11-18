<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AgentFactory extends Factory
{
    protected $model = Agent::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'role_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

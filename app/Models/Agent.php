<?php

namespace App\Models;

use App\Enums\AgentRoleEnum;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $casts = [
        'role_id' => AgentRoleEnum::class
    ];

}

<?php

namespace App\Models;

use App\Enums\AgentRoleEnum;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'role_id' => AgentRoleEnum::class
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}

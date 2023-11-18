<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'in_game_leader'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function agents()
    {
        return $this->belongsToMany(Agent::class);
    }
}

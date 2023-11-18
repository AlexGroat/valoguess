<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $hidden = [
        'id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}

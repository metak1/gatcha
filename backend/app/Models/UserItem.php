<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'item_id',
        'unit_id',
        'level',
        'hp_bonus',
        'percent_hp_bonus',
        'attack_bonus',
        'percent_attack_bonus',
        'defense_bonus',
        'percent_defense_bonus',
        'speed_bonus',
        'crit_chance_rate_bonus',
        'crit_damage_rate_bonus'
    ];
    

    public function unit()
    {
        return $this->belongsTo(UserUnit::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rarity',
        'hp',
        'attack',
        'defense', 
        'speed',
        'crit_chance_rate',
        'crit_damage_rate',
        'evasion_rate',
        'hit_chance_rate',
    ];  
}

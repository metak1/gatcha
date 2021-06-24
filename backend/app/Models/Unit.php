<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spell;
use App\Models\UserItem;

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
        'spell_id'
    ];

    public function spell()
    {
        return $this->belongsTo(Spell::class);
    }
    
    public function items()
    {
        return $this->hasMany(UserItem::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;

class Spell extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cooldown',
        'type'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

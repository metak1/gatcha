<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserItem;

class UserUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'unit_id',
        'rarity'
    ];

    public function items()
    {
        return $this->hasMany(UserItem::class, 'unit_id');
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

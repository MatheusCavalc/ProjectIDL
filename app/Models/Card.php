<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'image',
        'played_champion_1',
        'record_with_champion_1',
        'played_champion_2',
        'record_with_champion_2',
        'player_id',
        'week',
        'against_1',
        'against_2'
    ];

    public function against_1()
    {
        return $this->belongsTo(Team::class, 'against_1', 'id');
    }

    public function against_2()
    {
        return $this->belongsTo(Team::class, 'against_2', 'id');
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

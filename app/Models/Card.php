<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['rating', 'image', 'played_champion', 'record_with_champion', 'player_id'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

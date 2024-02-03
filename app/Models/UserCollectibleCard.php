<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCollectibleCard extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'collectible_card_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collectibleCard()
    {
        return $this->belongsTo(CollectibleCard::class);
    }
}

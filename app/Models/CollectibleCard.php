<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectibleCard extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'redemption_code', 'active'];
}

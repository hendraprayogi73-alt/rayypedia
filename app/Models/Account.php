<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [

        'sponsor_id',
        'game_id',
        'title',
        'thumbnail',
        'price',
        'level',
        'prime_level',
        'description'
    ];

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

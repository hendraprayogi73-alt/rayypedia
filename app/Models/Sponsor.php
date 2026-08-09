<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [

        'name',
        'logo',
        'whatsapp',
        'group_link',
        'description',
        'package',
        'verified'
    ];

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}

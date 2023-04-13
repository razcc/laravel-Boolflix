<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name'
    ];

    // Collegamenti al user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

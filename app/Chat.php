<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $guraded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'vote_direction',
        'user_id',
        'thing_id'
      ];
}

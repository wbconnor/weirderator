<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = [
        'title',
        'weird_votes',
        'total_votes',
        'weird_score',
        'user_id'
      ];
}

<?php

namespace App;

use App\User;
use App\Answer;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function answers()
    {
        $this->hasMany('App\Answer');
    }
}

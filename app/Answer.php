<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function article()
    {
      return $this->belongsTo('Article');
    }
}

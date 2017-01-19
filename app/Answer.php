<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function article()
    {
      return $this->belongsTo('Article');
    }
    protected $guarded = ['id'];
}

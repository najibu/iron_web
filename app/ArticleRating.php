<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleRating extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_rating';

    protected $guarded = ['id'];

}

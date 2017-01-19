<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_rating', function (Blueprint $table) {
           $table->increments('id')->unsigned();
            $table->integer('article_id')->unsigned()->index();
            $table->integer('answer_id')->unsigned()->index();
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('article_id')
                  ->references('id')->on('articles')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('answer_id')
                  ->references('id')->on('answers')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_rating');
    }
}

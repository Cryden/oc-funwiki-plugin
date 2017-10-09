<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_movies_genres');
    }
}

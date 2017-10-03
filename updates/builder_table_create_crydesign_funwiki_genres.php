<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiGenres extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('icon');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_genres');
    }
}

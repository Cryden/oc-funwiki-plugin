<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiUniversesBook extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_universes_book', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('universe_id');
            $table->integer('book_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_universes_book');
    }
}

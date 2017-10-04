<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiBook extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_book', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_book');
    }
}

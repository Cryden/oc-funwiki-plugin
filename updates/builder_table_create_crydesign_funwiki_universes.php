<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiUniverses extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_universes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('logo');
            $table->string('img');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_universes');
    }
}

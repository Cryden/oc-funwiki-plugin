<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPersons extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_persons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('full_name');
            $table->string('full_name_original');
            $table->string('slug');
            $table->string('country');
            $table->date('birth_date');
            $table->date('death_date');
            $table->text('biografy');
            $table->string('official_site');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_persons');
    }
}

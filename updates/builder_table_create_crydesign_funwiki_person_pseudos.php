<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPersonPseudos extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_person_pseudos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('full_name');
            $table->string('full_name_original');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_person_pseudos');
    }
}

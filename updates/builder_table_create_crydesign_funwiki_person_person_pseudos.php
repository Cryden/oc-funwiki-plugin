<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPersonPersonPseudos extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_person_person_pseudos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('person_id');
            $table->integer('person_pseudos_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_person_person_pseudos');
    }
}

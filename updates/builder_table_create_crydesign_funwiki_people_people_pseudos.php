<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPeoplePeoplePseudos extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_people_people_pseudos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('people_id');
            $table->integer('people_pseudo_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_people_people_pseudos');
    }
}

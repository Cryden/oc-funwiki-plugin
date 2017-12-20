<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPeopleRole extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_people_role', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('role');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_people_role');
    }
}

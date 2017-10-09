<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPersonRoles extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_person_roles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_person_roles');
    }
}

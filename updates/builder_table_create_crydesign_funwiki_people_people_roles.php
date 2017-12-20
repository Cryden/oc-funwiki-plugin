<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPeoplePeopleRoles extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_people_people_roles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('people_id');
            $table->integer('roles_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_people_people_roles');
    }
}

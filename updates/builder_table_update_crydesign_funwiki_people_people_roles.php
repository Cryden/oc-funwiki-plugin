<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPeoplePeopleRoles extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_people_people_roles', function($table)
        {
            $table->renameColumn('roles_id', 'people_roles_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_people_people_roles', function($table)
        {
            $table->renameColumn('people_roles_id', 'roles_id');
        });
    }
}

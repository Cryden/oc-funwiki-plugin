<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons12 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->renameColumn('person_parent_id', 'person_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->renameColumn('person_id', 'person_parent_id');
        });
    }
}

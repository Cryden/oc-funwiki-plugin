<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersonPerson4 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->renameColumn('parent_id', 'person_person_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->renameColumn('person_person_id', 'parent_id');
        });
    }
}

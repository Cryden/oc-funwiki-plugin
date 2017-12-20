<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPeoplePeoplePseudos extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_people_people_pseudos', function($table)
        {
            $table->renameColumn('people_pseudo_id', 'people_pseudos_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_people_people_pseudos', function($table)
        {
            $table->renameColumn('people_pseudos_id', 'people_pseudo_id');
        });
    }
}

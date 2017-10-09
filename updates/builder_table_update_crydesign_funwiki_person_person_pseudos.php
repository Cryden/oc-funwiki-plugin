<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersonPersonPseudos extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_person_person_pseudos', function($table)
        {
            $table->renameColumn('person_pseudos_id', 'person_pseudo_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_person_person_pseudos', function($table)
        {
            $table->renameColumn('person_pseudo_id', 'person_pseudos_id');
        });
    }
}

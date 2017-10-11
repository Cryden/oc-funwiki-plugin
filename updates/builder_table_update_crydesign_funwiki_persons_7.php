<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons7 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->integer('person_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->dropColumn('person_id');
        });
    }
}

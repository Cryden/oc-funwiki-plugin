<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersonPerson5 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->increments('id');
        });
    }
}

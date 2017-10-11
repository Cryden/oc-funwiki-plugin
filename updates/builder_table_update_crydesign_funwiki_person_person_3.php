<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersonPerson3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}

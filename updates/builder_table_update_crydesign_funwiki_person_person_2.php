<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersonPerson2 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->integer('parent_id');
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_person_person', function($table)
        {
            $table->dropColumn('parent_id');
            $table->integer('id')->change();
        });
    }
}

<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons9 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->integer('person_parent_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->integer('person_parent_id')->nullable(false)->change();
        });
    }
}

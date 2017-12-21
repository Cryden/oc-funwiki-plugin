<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPeople2 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_people', function($table)
        {
            $table->boolean('is_pseudo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_people', function($table)
        {
            $table->dropColumn('is_pseudo');
        });
    }
}

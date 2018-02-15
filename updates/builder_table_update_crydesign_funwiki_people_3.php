<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPeople3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_people', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_people', function($table)
        {
            $table->dropColumn('title');
        });
    }
}

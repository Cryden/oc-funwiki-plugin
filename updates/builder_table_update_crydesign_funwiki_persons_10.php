<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons10 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->boolean('is_pseudo');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->dropColumn('is_pseudo');
        });
    }
}

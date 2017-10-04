<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiUniverses2 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}

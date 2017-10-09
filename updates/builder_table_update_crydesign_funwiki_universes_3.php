<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiUniverses3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->string('original_title');
            $table->renameColumn('name', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->dropColumn('original_title');
            $table->renameColumn('title', 'name');
        });
    }
}

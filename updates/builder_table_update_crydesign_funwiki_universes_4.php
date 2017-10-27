<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiUniverses4 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->renameColumn('original_title', 'additional_title');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->renameColumn('additional_title', 'original_title');
        });
    }
}

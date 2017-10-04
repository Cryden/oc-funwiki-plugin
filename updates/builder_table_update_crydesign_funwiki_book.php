<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiBook extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_book', function($table)
        {
            $table->integer('universe_id');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_book', function($table)
        {
            $table->dropColumn('universe_id');
        });
    }
}

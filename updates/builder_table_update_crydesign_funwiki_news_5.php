<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiNews5 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}

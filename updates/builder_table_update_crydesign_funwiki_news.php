<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiNews extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
        });
    }
}

<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiNews3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->string('image', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_news', function($table)
        {
            $table->string('image', 255)->nullable(false)->change();
        });
    }
}

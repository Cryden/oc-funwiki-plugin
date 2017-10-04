<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiUniverses extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('logo');
            $table->dropColumn('img');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_universes', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('logo', 255);
            $table->string('img', 255);
        });
    }
}

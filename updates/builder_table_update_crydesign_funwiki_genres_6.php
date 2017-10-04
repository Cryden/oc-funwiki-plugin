<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiGenres6 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->dropColumn('icon');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('icon', 255)->nullable();
        });
    }
}

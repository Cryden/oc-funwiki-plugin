<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiGenres7 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->text('icon');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->dropColumn('icon');
        });
    }
}

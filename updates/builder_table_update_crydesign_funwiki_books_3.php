<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiBooks3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_books', function($table)
        {
            $table->dropColumn('release_date');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_books', function($table)
        {
            $table->date('release_date');
        });
    }
}

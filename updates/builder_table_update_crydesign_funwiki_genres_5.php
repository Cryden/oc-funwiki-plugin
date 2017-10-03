<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiGenres5 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('slug', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('slug', 255)->nullable(false)->change();
        });
    }
}

<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiGenres extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->text('icon')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('icon', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

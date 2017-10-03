<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiGenres3 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('title', 255)->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('icon', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_genres', function($table)
        {
            $table->string('title', 255)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('icon', 255)->nullable(false)->change();
        });
    }
}

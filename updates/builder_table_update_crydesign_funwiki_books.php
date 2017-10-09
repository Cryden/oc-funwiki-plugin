<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiBooks extends Migration
{
    public function up()
    {
        Schema::rename('crydesign_funwiki_book', 'crydesign_funwiki_books');
        Schema::table('crydesign_funwiki_books', function($table)
        {
            $table->string('original_title');
            $table->date('release_date');
            $table->dropColumn('universe_id');
        });
    }
    
    public function down()
    {
        Schema::rename('crydesign_funwiki_books', 'crydesign_funwiki_book');
        Schema::table('crydesign_funwiki_book', function($table)
        {
            $table->dropColumn('original_title');
            $table->dropColumn('release_date');
            $table->integer('universe_id');
        });
    }
}

<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->string('full_name_original', 255)->nullable()->change();
            $table->string('country', 255)->nullable()->change();
            $table->date('birth_date')->nullable()->change();
            $table->date('death_date')->nullable()->change();
            $table->text('biografy')->nullable()->change();
            $table->string('official_site', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->string('full_name_original', 255)->nullable(false)->change();
            $table->string('country', 255)->nullable(false)->change();
            $table->date('birth_date')->nullable(false)->change();
            $table->date('death_date')->nullable(false)->change();
            $table->text('biografy')->nullable(false)->change();
            $table->string('official_site', 255)->nullable(false)->change();
        });
    }
}

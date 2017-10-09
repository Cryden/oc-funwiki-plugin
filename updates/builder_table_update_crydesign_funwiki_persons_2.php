<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons2 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->string('full_name', 255);
            $table->string('full_name_original', 255);
            $table->string('slug', 255);
            $table->string('country', 255);
            $table->date('birth_date');
            $table->date('death_date');
            $table->text('biografy');
            $table->string('official_site', 255);
            $table->dropColumn('1');
            $table->dropColumn('2');
            $table->dropColumn('3');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->dropColumn('full_name');
            $table->dropColumn('full_name_original');
            $table->dropColumn('slug');
            $table->dropColumn('country');
            $table->dropColumn('birth_date');
            $table->dropColumn('death_date');
            $table->dropColumn('biografy');
            $table->dropColumn('official_site');
            $table->integer('1');
            $table->integer('2');
            $table->integer('3');
        });
    }
}

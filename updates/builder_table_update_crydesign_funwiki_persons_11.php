<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrydesignFunwikiPersons11 extends Migration
{
    public function up()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->string('name');
            $table->string('name_original');
            $table->string('last_name');
            $table->string('last_name_original');
            $table->string('patronymic');
        });
    }
    
    public function down()
    {
        Schema::table('crydesign_funwiki_persons', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('name_original');
            $table->dropColumn('last_name');
            $table->dropColumn('last_name_original');
            $table->dropColumn('patronymic');
        });
    }
}

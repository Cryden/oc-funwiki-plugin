<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPeoplePseudo extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_people_pseudo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('full_name');
            $table->string('full_name_origin')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_people_pseudo');
    }
}

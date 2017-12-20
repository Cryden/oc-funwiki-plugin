<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiPeople extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_people', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('first_name_origin')->nullable();
            $table->string('last_name');
            $table->string('last_name_origin')->nullable();
            $table->string('full_name');
            $table->string('full_name_origin')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_people');
    }
}

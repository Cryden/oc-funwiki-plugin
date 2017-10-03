<?php namespace Crydesign\FunWiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrydesignFunwikiNewsType extends Migration
{
    public function up()
    {
        Schema::create('crydesign_funwiki_news_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crydesign_funwiki_news_type');
    }
}

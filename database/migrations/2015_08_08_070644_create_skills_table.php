<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function($table)
        {
        $table->increments('sk_id');
         $table->integer('wk_id');
         $table->char('skill',250);
         $table->char('Type',250);
         $table->char('industry',250);
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::drop('skills');
    }
}

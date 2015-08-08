<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function($table)
        {
        $table->increments('client_id');
         $table->char('Name',250);
         $table->char('address',250);
         $table->char('area',250);
         $table->char('email',250);
         $table->char('user',250);
         $table->char('pass',250);
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('client');
    }
}

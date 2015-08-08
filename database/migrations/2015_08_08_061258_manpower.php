<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Manpower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('manpower', function($table)
        {
            $table->increments('mp_id');
            $table->char('mp_name',250);
            $table->char('address',250);
            $table->char('sec_reg',50);
            $table->char('TIN',50);
            $table->char('b_permit',50);
            $table->char('user',50);
            $table->char('pass',50);
            $table->char('email',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('manpower');
    }
}

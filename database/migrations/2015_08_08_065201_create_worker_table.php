<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('worker', function($table)
        {
            $table->increments('wk_id');
             $table->integer('mp_id');
             $table->char('wk_name',250);
             $table->integer('age');
             $table->char('address',250);
             $table->char('TIN',30);
             $table->char('SSS_ID',30);
             $table->char('PAGIBIG_MID',30);
             $table->char('Area',250);
             $table->char('user',30);
             $table->char('pass',30);
             $table->char('email',30);
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
         Schema::drop('worker');
    }
}

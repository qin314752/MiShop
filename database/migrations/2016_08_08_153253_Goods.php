<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_goods',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('keywords',100);
            $table->integer('cid');
            $table->string('name',100);
            $table->integer('storage_num');
            $table->decimal('price',10,2);
            $table->text('descri');
            $table->string('href');
            $table->string('pic');
            $table->smallInteger('ishow');
            $table->smallInteger('iscommm');
            $table->smallInteger('ishot');
            $table->integer('nav_list_id');
            $table->timestamps();
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
    }
}

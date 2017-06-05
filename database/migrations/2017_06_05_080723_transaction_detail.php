<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('transaction_detail', function(Blueprint $table){
         $table->increments('id');
         $table->string('kendaraan_id');
         $table->string('harga');
         $table->integer('transaction_id');
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
       Schema::dropIfExists('transaction_detail');
     }
}

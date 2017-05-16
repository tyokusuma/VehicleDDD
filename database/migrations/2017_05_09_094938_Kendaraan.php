<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('Kendaraan', function(Blueprint $table){
       $table->increments('id');
       $table->string('merk_kenderaan');
       $table->string('warna_kenderaan');
       $table->integer('stok_kendaraan');
       $table->integer('tahun_produksi');
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
        Schema::dropIfExists('Kendaraan');
    }
}

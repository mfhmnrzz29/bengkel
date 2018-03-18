<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned()->nullable();      
            $table->foreign('id_barang')->references('id')->on('barangs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); 
            $table->integer('id_jasa')->unsigned()->nullable();      
            $table->foreign('id_jasa')->references('id')->on('jasas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('id_karyawan')->unsigned();
            $table->foreign('id_karyawan')->references('id')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');          
            $table->integer('jumlah');
            $table->integer('total_harga');          
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
        Schema::dropIfExists('penjualans');
    }
}

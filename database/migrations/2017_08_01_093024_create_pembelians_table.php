<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_supplier')->unsigned()->index();
            $table->foreign('id_supplier')->references('id')->on('suppliers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('id_barang')->unsigned()->index();      
            $table->foreign('id_barang')->references('id')->on('barangs')
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
        Schema::dropIfExists('pembelians');
    }
}

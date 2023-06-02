<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_pengiriman', 15);
            $table->date('tanggal');
            $table->string('lokasi_id', 11);
            $table->string('barang_id', 11);
            $table->string('jumlah_barang', 11);
            $table->string('harga_barang', 11);
            $table->string('kurir_id', 11);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}

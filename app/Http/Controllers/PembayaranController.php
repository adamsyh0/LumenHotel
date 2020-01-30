<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_pelanggan')->index('id_pelanggan_foreign');
            $table->integer('id_kamar')->index('id_kamar_foreign');
            $table->integer('id_pemesanan')->index('id_pemesanan_foreign');
            $table->datetime('tanggal_bayar');
            $table->integer('lama_inap');
            $table->integer('total');

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
        Schema::dropIfExists('pembayaran');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nama_program')->nullable();
            $table->date('tgl_transaksi')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->double('nominal')->nullable();
            $table->double('nominal_pengembangan_dakwah')->nullable();
            $table->double('nominal_total')->nullable();
            $table->string('status')->nullable();
            $table->text('doa')->nullable();
            $table->string('id_transaksi')->nullable();
            $table->string('checkout_link')->nullable();
            $table->string('transaction_token')->nullable();
            $table->string('order_id')->nullable();
            $table->string('bukti_pembayaran')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};

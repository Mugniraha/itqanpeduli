<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_zakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur')->nullable();
            $table->string('nama_program_zakat')->nullable();
            $table->date('tgl_transaksi')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->double('nominal_zakat')->nullable();
            $table->double('nominal_pengembangan_dakwah')->nullable();
            $table->double('nominal_total')->nullable();
            $table->string('status')->nullable();
            $table->text('doa')->nullable();
            $table->string('id_transaksi')->nullable();
            $table->string('checkout_link')->nullable();
            $table->string('transaction_token')->nullable();
            $table->string('qr_code_url')->nullable();
            $table->string('order_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_zakat');
    }
};

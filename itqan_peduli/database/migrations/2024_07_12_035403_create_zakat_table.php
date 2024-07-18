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
        Schema::create('zakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur');
            $table->string('nama_program_zakat');
            $table->date('tgl_transaksi');
            $table->string('metode_pembayaran');
            $table->double('nominal_zakat');
            $table->double('nominal_pengembangan_dakwah');
            $table->double('nominal_total');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakat');
    }
};

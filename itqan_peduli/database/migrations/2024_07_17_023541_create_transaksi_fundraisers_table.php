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
        Schema::create('transaksi_fundraisers', function (Blueprint $table) {
            $table->id();
            $table->string('fundraiser');
            $table->decimal('nominal', 10, 2);
            $table->string('status');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('kode_bank');
            $table->string('tipe')->default('penarikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_fundraisers');
    }
};

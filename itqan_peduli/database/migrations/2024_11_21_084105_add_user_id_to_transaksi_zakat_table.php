<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk menambahkan kolom user_id.
     */
    public function up(): void
    {
        Schema::table('transaksi_zakat', function (Blueprint $table) {
            // Tambahkan kolom user_id
            $table->unsignedBigInteger('user_id')->nullable()->after('nama_donatur');

            // Tambahkan foreign key ke tabel users
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null'); // Atur null jika user dihapus
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::table('transaksi_zakat', function (Blueprint $table) {
            // Hapus foreign key dan kolom user_id
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};

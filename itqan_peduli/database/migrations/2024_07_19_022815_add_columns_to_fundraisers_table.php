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
        Schema::table('fundraisers', function (Blueprint $table) {
            $table->string('id_user')->nullable();
            $table->string('kabkota')->nullable();
            $table->string('password')->nullable(); // Biasanya password dienkripsi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fundraisers', function (Blueprint $table) {
            $table->dropColumn('id_user');
            $table->dropColumn('kabkota');
            $table->dropColumn('password');
        });
    }
};

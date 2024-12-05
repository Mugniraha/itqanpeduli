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
        Schema::create('konten', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key)
            $table->text('content')->nullable(); // Kolom content (untuk syarat dan ketentuan, pusat bantuan, dll)
            $table->string('type')->nullable(); // Kolom type
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('konten');
    }
};

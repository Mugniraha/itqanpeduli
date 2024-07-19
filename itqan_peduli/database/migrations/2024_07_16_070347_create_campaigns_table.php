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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->string('category');
            $table->string('photo')->nullable();
            $table->text('content');
            $table->unsignedBigInteger('target')->nullable();
            $table->dateTime('deadline');
            $table->string('donate_button_label');
            $table->unsignedTinyInteger('operational_fund_percentage');
            $table->unsignedTinyInteger('fundraiser_reward_percentage');
            $table->unsignedBigInteger('nominal1')->nullable();
            $table->unsignedBigInteger('nominal2')->nullable();
            $table->unsignedBigInteger('nominal3')->nullable();
            $table->unsignedBigInteger('nominal4')->nullable();
            $table->unsignedBigInteger('nominal5')->nullable();
            $table->unsignedBigInteger('nominal6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};

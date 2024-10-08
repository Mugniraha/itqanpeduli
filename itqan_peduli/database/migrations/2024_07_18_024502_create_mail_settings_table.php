<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('mail_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mail_mailer');
            $table->string('mail_host');
            $table->integer('mail_port');
            $table->string('mail_username');
            $table->string('mail_password');
            $table->string('mail_encryption');
            $table->string('mail_from_address');
            $table->string('mail_from_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mail_settings');
    }
}

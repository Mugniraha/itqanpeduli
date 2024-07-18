<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyaluransTable extends Migration
{
    public function up()
    {
        Schema::create('penyalurans', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->integer('nominal');
            $table->text('keterangan');
            $table->integer('penerima_manfaat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyalurans');
    }
}

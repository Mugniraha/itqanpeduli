<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToFundraisersTable extends Migration
{
    public function up()
    {
        Schema::table('fundraisers', function (Blueprint $table) {
            $table->string('image')->nullable()->after('kabkota');
        });
    }

    public function down()
    {
        Schema::table('fundraisers', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}

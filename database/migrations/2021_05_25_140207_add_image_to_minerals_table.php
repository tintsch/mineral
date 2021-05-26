<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('minerals', function (Blueprint $table) {
            $table->string('title');
            $table->string('subtitle');
            $table->integer('number');
            $table->string('location');
            $table->string('text1');
            $table->string('text2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('minerals', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('subtitle');
            $table->dropColumn('number');
            $table->dropColumn('location');
            $table->dropColumn('text1');
            $table->dropColumn('text2');
        });
    }
}

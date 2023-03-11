<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_p')->nullable();
            $table->string('sec1_img')->nullable();

            $table->string('sec2_p')->nullable();
            $table->string('sec2_p2')->nullable();
            $table->string('sec2_img')->nullable();

            $table->string('sec3_p')->nullable();
            $table->string('sec3_img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_g_s');
    }
};

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
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->json('img')->nullable();
            $table->string('open_in')->nullable();
            $table->string('desc')->nullable();
            $table->string('his_img')->nullable();
            $table->string('his_desc')->nullable();
            $table->json('mis_img')->nullable();
            $table->string('mis_desc')->nullable();
            $table->string('vis_img')->nullable();
            $table->string('vis_desc')->nullable();
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
        Schema::dropIfExists('welcomes');
    }
};

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
        Schema::create('polices', function (Blueprint $table) {
            $table->id();
            $table->string('head')->nullable();
            $table->string('head_img')->nullable();
            $table->string('f_p')->nullable();
            $table->string('f_p_img')->nullable();
            $table->string('second_p')->nullable();
            $table->string('third_p')->nullable();
            $table->string('third_p_img')->nullable();
            $table->string('parent_h')->nullable();
            $table->string('parent_img')->nullable();
            $table->string('parent_p')->nullable();
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
        Schema::dropIfExists('polices');
    }
};

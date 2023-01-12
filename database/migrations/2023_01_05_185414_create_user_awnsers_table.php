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
        Schema::create('user_awnsers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("quiz_id");
            $table->unsignedBigInteger("question_id");
            $table->string("awnser");
            $table->string("attachment")->nullable();
            $table->float("score")->nullable();
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
        Schema::dropIfExists('user_awnsers');
    }
};

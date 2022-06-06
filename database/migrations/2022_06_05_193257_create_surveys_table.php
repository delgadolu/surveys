<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->enum('range_ege', [1,2,3,4])->default('1')->comment("1 => 18-25, 2 => 26-33, 3 => 34-40, 4 =>40 +");
            $table->enum('sexo', ['F','M'])->default('F')->comment("F => femenino, M => masculino");
            $table->timestamps();
            $table->string('favorite_social_network',50);
            $table->integer('time_facebook');
            $table->integer('time_whatsapp');
            $table->integer('time_twitter');
            $table->integer('time_instagram');
            $table->integer('time_tiktok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}

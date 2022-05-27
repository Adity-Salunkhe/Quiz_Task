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
    {    Schema::create('questions', function (Blueprint $table) {
        $table->increments('q_id');
        $table->string('question');
        $table->string('option_1');
        $table->string('option_2');
        $table->string('option_3');
        $table->string('option_4');
        $table->string('answer');
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
        //
    }
};

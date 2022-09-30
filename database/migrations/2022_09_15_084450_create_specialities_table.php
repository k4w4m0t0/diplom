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
        Schema::dropIfExists('specialities');
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->integer('number');// номер специальности
            $table->string('title');// навзание специальности
            $table->string('shortcut');// абривеатура
            $table->integer('count');// кол-во мест
            // $table->string('base');// база 9-ти или 11-ти классов 
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
        Schema::dropIfExists('specialities');
    }
};

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
        Schema::dropIfExists('abiturients');
        Schema::create('abiturients', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');//фамилия
            $table->string('first_name');//имя
            $table->string('middle_name');//отчество
            $table->string('seria', 4);//серия паспорта
            $table->string('nomer', 6);//номре паспорта
            $table->string('passport');//место выдачи паспорта
            $table->string('inn', 12)->nullable();//инн
            $table->string('snils', 11)->nullable();//снилс
            $table->string('telephone',12);//номер телефона
            $table->string('address');//адрес прописки
            $table->string('citizenship');//граждантсво

            // id специальности
            $table->foreignId('specialities_id')->constrained('specialities')->onDelete('cascade');
            // id типа документа
            $table->foreignId('documenttypes_id')->constrained('documenttypes')->onDelete('cascade');

            $table->string('series_doc',6);//серия документа об образовании
            $table->string('number_doc',7);//номер документаоб образовании
            
            $table->date('date_of');//дата подачи оригинала
            $table->date('date_sub');//дата заявления
            $table->string('reg_number')->nullable()->default(NULL);//регистрационный номер
            $table->boolean('home_status');//нужноли общежитие
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
        Schema::dropIfExists('abiturients');
    }
};

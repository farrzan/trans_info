<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationalId')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phoneNUMBER')->unique();
            $table->text('address')->unique();
            $table->date('BirthDate');
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
        Schema::dropIfExists('Transinfo');
    }
}

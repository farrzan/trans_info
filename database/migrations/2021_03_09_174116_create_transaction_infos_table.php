<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationalId')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber')->unique();
            $table->text('address')->unique();
            $table->date('birthDate');
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
        Schema::dropIfExists('TransactionInfo');
    }
}

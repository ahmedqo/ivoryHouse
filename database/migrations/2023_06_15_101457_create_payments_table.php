<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation');
            $table->string('ref')->nullable();
            $table->string('paymentId')->nullable();
            $table->string('transactionId')->nullable();
            $table->string('amount')->nullable();
            $table->string('auth')->nullable();
            $table->string('authCode')->nullable();
            $table->string('result')->nullable();
            $table->string('postDate')->nullable();
            $table->timestamps();

            $table->foreign('reservation')->references('id')->on('reservations')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

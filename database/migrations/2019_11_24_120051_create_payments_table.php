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
            $table->bigIncrements('id');
            $table->string("creator");
            $table->string('date');
            $table->string('answer');
            $table->string('nameAssessee');
            $table->string('gender');
            $table->string('pin');
            $table->string('oldpin');
            $table->string('residentStatus');
            $table->string('eligible');
            $table->string('dobDate');
            $table->string('employeeName');
            $table->string('spouseName');
            $table->string('spouseTIN');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('paddress');
            $table->string('permanentaddress');

            $table->string('contactNbr');
            $table->string('email');
            $table->string('nid');
            $table->string('bid');
            $table->string('money');
            $table->string('account');
            $table->string('payment');
            $table->string('section');

            $table->string('ammountTax');


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
        Schema::dropIfExists('payments');
    }
}

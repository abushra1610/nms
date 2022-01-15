<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('division');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('pin_code');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone');
            $table->string('donation');
            $table->string('nid');
            $table->string('credit_card');
            $table->string('card_number');
            $table->string('date');
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
        Schema::dropIfExists('donates');
    }
}

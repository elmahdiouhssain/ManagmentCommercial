<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complete')->unique();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('tele')->nullable();
            ///////////BILLING/////////////
            $table->string('currency')->nullable();
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            ///////////////MORE INFOS//////////
            $table->string('account_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->text('note')->nullable();
            $table->boolean('is_valid')->default(False);
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
        Schema::dropIfExists('customers');
    }
}

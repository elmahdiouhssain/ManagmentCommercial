<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name')->nullable();
            $table->string('email')->unique();
            $table->string('fname')->unique();
            $table->string('tele')->nullable();
            $table->string('currency')->nullable();
            $table->string('country')->nullable();
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('province')->nullable();

            $table->decimal('capital')->nullable();
            $table->string('logo')->nullable();
            $table->string('bic')->nullable();
            $table->string('bank')->nullable();
            $table->string('rcs')->nullable();
            $table->string('c_naf')->nullable();
            $table->string('n_siret')->nullable();
            $table->string('n_immatriculation')->nullable();
            
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
        Schema::dropIfExists('suppliers');
    }
}

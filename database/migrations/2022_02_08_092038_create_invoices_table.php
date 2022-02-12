<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('supplier_name')->nullable();
            $table->dateTime('relase_date');
            $table->string('pdf_url')->nullable();
            $table->string('total_ht')->nullable();
            $table->string('total_tva')->nullable();
            $table->string('total_ttc')->nullable();
            //$table->string('release_from')->nullable();
            $table->boolean('is_paid')->default(false);
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
        Schema::dropIfExists('invoices');
    }
}

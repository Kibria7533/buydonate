<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_info', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('mobilenumber');
            $table->string('pe_address');
            $table->string('pre_address');
            $table->string('po_code');
            $table->string('p_name');
            $table->string('p_source');
            $table->string('p_price');
            $table->string('ed_institute');
            $table->string('ed_level');
             $table->string('CourierPoint');
              $table->string('CourierMobileNumber');
               
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
        Schema::dropIfExists('sellers_info');
    }
}

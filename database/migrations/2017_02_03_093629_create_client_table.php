<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tblCompany', function(Blueprint $table) {
          $table->increments('intCompanyID');
          $table->primary('intCompanyID');
          $table->string('strCompanyName', 45);
          $table->string('strCompanyAddress', 45);
          $table->string('strCompanyEmail', 45);
          $table->unique('strCompanyEmail');
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
        //
        Schema::dropIfExists('tblCompany');
    }
}

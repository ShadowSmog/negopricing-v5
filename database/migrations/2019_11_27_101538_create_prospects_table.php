<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("civility")->nullable(false);
            $table->string("lastname")->nullable(false);
            $table->string("firstname")->nullable(false);
            $table->string("company")->nullable(false);
            $table->string("status")->nullable(false);
            $table->string("email")->nullable(false);
            $table->string("phone")->nullable(false);
            $table->text("message")->nullable(false);
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
        Schema::dropIfExists('prospects');
    }
}

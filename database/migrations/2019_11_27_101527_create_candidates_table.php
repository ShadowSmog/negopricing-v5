<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("civility")->nullable(false);
            $table->string("lastname")->nullable(false);
            $table->string("firstname")->nullable(false);
            $table->string("onlinecv")->nullable(false);
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
        Schema::dropIfExists('candidates');
    }
}

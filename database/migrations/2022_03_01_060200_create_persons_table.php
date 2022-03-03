<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments("person_id");
            $table->string("name", 64)->nullable(false);
            $table->string("phone_no", 20)->nullable(false);
            $table->date("date_of_birth")->nullable(false);
            $table->string("email", 254)->nullable(false);
            $table->tinyInteger("age");
            $table->text("description")->nullable(false);
            $table->string("hobby");
            $table->string("gender")->nullable(false);
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
        Schema::dropIfExists('persons');
    }
};

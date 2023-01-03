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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->tinyInteger('sex')->default('0');
            $table->date('birthdate');
            $table->string('civil_status');
            $table->string('services_acquired');
            $table->string('nutritional_status');
            $table->tinyInteger('employment_status')->default('0');
            $table->tinyInteger('pwd_status')->default('0');
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
        Schema::dropIfExists('residents');
    }
};

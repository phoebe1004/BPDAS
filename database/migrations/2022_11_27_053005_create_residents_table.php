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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('purok');
            $table->string('address');
            $table->string('emailaddress');
            $table->bigInteger('contactnumber')->nullable()->default(12);
            $table->integer('age');
            $table->date('birthdate');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('services_acquired');
            $table->string('nutritional_status');
            $table->string('employment_status');
            $table->string('pwd_status');
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

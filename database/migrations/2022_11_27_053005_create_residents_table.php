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
            $table->string('relationship');
            $table->string('sex');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('membership_type');
            $table->integer('contact_number')->lenght(12);
            $table->string('purok');
            $table->string('classification_by_age');
            $table->string('remarks');
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

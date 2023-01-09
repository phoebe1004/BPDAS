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
        Schema::create('healthcases', function (Blueprint $table) {
            $table->id();
            // $table->string('pwd_rate');
            // $table->string('immunization_rate');
            // $table->string('maternal_rate');
            // $table->string('nutritional_rate');
            // $table->string('familyplanning_rate');
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
        Schema::dropIfExists('healthcases');
    }
};

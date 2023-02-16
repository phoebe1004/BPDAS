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
        Schema::create('facility_structure', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique();
            $table->string('type_of_water_source');
            $table->string('type_of_toilet_facility');
            $table->string('type_of_waste_management');
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
        Schema::dropIfExists('facility_structure');
    }
};

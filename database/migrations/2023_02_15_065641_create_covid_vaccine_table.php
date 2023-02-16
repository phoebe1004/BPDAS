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
        Schema::create('covid_vaccine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique();
            $table->string('c_vac_indication');
            $table->date('c_vac_when');
            $table->string('c_vac_where');
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
        Schema::dropIfExists('covid_vaccine');
    }
};

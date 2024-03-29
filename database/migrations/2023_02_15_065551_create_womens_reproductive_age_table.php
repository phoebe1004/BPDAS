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
        Schema::create('womens_reproductive_age', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique()->onDelete('cascade');;
            $table->date('last_menstrual_period')->nullable();
            $table->string('family_planning_use')->nullable();
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
        Schema::dropIfExists('womens_reproductive_age');
    }
};

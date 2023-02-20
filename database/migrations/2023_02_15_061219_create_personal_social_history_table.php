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
        Schema::create('personal_social_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique()->onDelete('cascade');;
            $table->string('smoker')->nullable(); // TODO: to be removed
            $table->string('alcohol_beverages_drinker');
            $table->string('sexually_active');
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
        Schema::dropIfExists('personal_social_history');
    }
};

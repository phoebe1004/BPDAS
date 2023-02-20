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
        Schema::create('health_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique()->onDelete('cascade');
            $table->string('philhealth_number')->nullable();
            $table->string('medical_history');
            $table->string('remark');
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
        Schema::dropIfExists('health_information');
    }
};

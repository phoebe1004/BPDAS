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
        Schema::create('covid_plus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique()->onDelete('cascade');;
            $table->string('c_plus_indication');
            $table->date('c_plus_when')->nullable();
            $table->string('c_plus_where')->nullable();
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
        Schema::dropIfExists('covid_plus');
    }
};

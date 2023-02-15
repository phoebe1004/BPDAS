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
        Schema::create('mr_td', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique();
            $table->string('mr_indication');
            $table->date('mr_when');
            $table->string('td_indication');
            $table->date('td_when');
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
        Schema::dropIfExists('mr_td');
    }
};

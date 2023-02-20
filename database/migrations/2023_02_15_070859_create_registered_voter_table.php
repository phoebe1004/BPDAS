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
        Schema::create('registered_voter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id')->constrained()->unique()->onDelete('cascade');;
            $table->string('reg_vot_indication');
            $table->string('reg_vot_where')->nullable();
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
        Schema::dropIfExists('registered_voter');
    }
};

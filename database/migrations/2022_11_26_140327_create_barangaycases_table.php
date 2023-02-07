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
        Schema::create('barangaycases', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->string('complainant');
            $table->string('type_case');
            $table->string('case_specification');
            $table->date('date_filed');
            $table->string('case_status');
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
        Schema::dropIfExists('barangaycases');
    }
};

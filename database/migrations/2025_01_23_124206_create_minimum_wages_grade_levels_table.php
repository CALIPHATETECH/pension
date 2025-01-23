<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinimumWagesGradeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minimum_wages_grade_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('minimum_wage_id');
            $table->foreignId('grade_level_id');
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
        Schema::dropIfExists('minimum_wages_grade_levels');
    }
}

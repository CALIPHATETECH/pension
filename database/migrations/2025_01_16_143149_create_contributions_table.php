<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('percentage');
            $table->timestamps();
        });

        $conts = [
            ['name'=>'Pension', 'percentage'=> 10],
            ['name'=>'Contribution', 'percentage'=>5]
        ];
        foreach($conts as $cont){
            App\Models\Contribution::firstOrCreate($cont);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributions');
    }
}

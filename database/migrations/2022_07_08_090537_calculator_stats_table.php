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
        Schema::create('calculator_stats', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('critical');
            $table->string('critical_resistance');
            $table->string('block');
            $table->string('block_penetration');
            $table->string('accuracy');
            $table->string('evasion');
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
        Schema::dropIfExists('calculator_stats');
    }
};

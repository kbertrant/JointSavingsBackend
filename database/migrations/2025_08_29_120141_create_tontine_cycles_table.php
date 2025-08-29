<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tontine_cycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_ton');
            $table->integer('cycle_num');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('total');
            $table->string('stat');
            $table->timestamps();

            $table->foreign('fk_ton')->references('id')->on('tontines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontine_cycles');
    }
};

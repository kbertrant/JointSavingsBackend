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
        Schema::create('tontines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_usr');
            $table->string('tontine_name');
            $table->string('tontine_status');
            $table->datetime('start_date');
            $table->integer('cycle_duration');
            $table->timestamps();

            $table->foreign('fk_usr')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontines');
    }
};

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
        Schema::create('tontine_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_ton');
            $table->unsignedBigInteger('fk_mem');
            $table->unsignedBigInteger('fk_usr');
            $table->datetime('join_date');
            $table->integer('position_color');
            $table->integer('cur_balance');
            $table->string('stat');
            $table->timestamps();

            $table->foreign('fk_ton')->references('id')->on('tontines');
            $table->foreign('fk_mem')->references('id')->on('members');
            $table->foreign('fk_usr')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontine_members');
    }
};

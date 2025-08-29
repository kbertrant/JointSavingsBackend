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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_cycle');
            $table->unsignedBigInteger('fk_mem');
            $table->dateTime('due_date');
            $table->dateTime('pay_date');
            $table->integer('amount');
            $table->integer('penalty_amount');
            $table->string('pay_status');
            $table->timestamps();

            $table->foreign('fk_cycle')->references('id')->on('tontine_cycles');
            $table->foreign('fk_mem')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};

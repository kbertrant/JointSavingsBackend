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
        Schema::create('penalty_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_pen')->nullable();
            $table->integer('amount');
            $table->string('ref');
            $table->dateTime('pay_date');
            $table->timestamps();

            $table->foreign('fk_pen')->references('id')->on('penalties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalty_payments');
    }
};

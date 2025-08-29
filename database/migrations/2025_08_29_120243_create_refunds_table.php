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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_loan');
            $table->string('ref_num');
            $table->date('ref_date');
            $table->string('ref_stat')->nullable();
            $table->integer('ref_amount')->nullable();
            $table->date('ref_payment')->nullable();
            $table->timestamps();

            $table->foreign('fk_loan')->references('id')->on('loans');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};

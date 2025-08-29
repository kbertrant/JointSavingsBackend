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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_mem');
            $table->string('loan_num');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('loan_stat');
            $table->decimal('percent');
            $table->integer('loan_caution');
            $table->integer('amount_lent');
            $table->integer('amount_return');
            $table->integer('type_refunds');
            $table->timestamps();

            $table->foreign('fk_mem')->references('id')->on('members');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};

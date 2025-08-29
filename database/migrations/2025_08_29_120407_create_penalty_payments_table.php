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
            $table->unsignedBigInteger('fk_con')->nullable();
            $table->unsignedBigInteger('fk_ref')->nullable();
            $table->integer('amount');
            $table->string('ref');
            $table->dateTime('pay_date');
            $table->timestamps();

            $table->foreign('fk_con')->references('id')->on('contributions');
            $table->foreign('fk_ref')->references('id')->on('refunds');
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

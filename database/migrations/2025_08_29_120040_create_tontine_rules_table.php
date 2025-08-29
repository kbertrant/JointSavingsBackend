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
        Schema::create('tontine_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_ton');
            $table->string('rule_type');
            $table->string('key');
            $table->string('value');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('fk_ton')->references('id')->on('tontines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontine_rules');
    }
};

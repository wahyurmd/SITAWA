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
        Schema::create('cambridge_rg_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('cambridge_test_id');
            $table->unsignedBigInteger('cambridgerg_plates_id');
            $table->string('user_answer');
            $table->string('keywords');
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->foreign('cambridge_test_id')->references('id')->on('cambridge_tests');
            $table->foreign('cambridgerg_plates_id')->references('id')->on('cambridge_rg_plates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambridge_rg_answers');
    }
};

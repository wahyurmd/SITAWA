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
        Schema::create('ishihara_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('ishihara_test_id');
            $table->unsignedBigInteger('ishihara_plates_id');
            $table->string('user_answer');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('ishihara_test_id')->references('id')->on('ishihara_tests');
            $table->foreign('ishihara_plates_id')->references('id')->on('ishihara_plates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ishihara_answers');
    }
};

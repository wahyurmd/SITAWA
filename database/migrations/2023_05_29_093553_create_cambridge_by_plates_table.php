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
        Schema::create('cambridge_by_plates', function (Blueprint $table) {
            $table->id();
            $table->string('desc');
            $table->string('plate');
            $table->string('answer_key');
            $table->string('keyword');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambridge_by_plates');
    }
};

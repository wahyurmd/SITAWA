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
        Schema::create('cambridge_rg_plates', function (Blueprint $table) {
            $table->id();
            $table->string('desc');
            $table->string('plate');
            $table->string('pil_a')->nullable();
            $table->string('pil_b')->nullable();
            $table->string('pil_c')->nullable();
            $table->string('pil_d')->nullable();
            $table->string('answer_key');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambridge_rg_plates');
    }
};

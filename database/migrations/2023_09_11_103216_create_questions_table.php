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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('heading_id');
            $table->text('questions');
            $table->text('instructions');
            $table->enum('input_type', ['checkbox', 'text', 'file']);
            $table->bigInteger('sequence');
            $table->timestamps();

            $table->foreign('heading_id')->references('id')->on('question_headings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};

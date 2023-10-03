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
        Schema::create('question_options', function (Blueprint $table) {
            $table->id();
            $table->string('options');
            $table->unsignedBigInteger('heading_id');
            $table->unsignedBigInteger('questions_id');
            $table->string('questions_sequence');
            $table->string('after_replacement_ques');

            $table->timestamps();

            $table->foreign('heading_id')->references('id')->on('question_headings')->onDelete('cascade');
            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_options');
    }
};

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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->text('answer')->default(null)->nullable();
            $table->string('file_name')->default(null)->nullable();
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_skipped')->default(true);
            $table->timestamps();

            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
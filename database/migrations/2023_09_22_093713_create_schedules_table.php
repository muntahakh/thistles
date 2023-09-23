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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('heading_id');
            $table->unsignedBigInteger('user_id');
            $table->string('day');
            $table->string('time_period')->nullable();
            $table->text('support')->nullable();
            $table->string('ratio')->nullable();
            $table->text('explanation')->nullable();
            $table->timestamps();

            $table->foreign('heading_id')->references('id')->on('question_headings')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

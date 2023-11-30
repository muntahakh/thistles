<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(QuestionHeadingsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(QuestionOptionsTableSeeder::class);
    }
}

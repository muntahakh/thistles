<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            ['title' => 'Post 1', 'content' => 'Content 1'],
            ['title' => 'Post 2', 'content' => 'Content 2'],
            // Add more data as needed...
        ];

        foreach ($data as $item) {
            Post::create($item);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionHeadingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_headings')->delete();
        $headings = array(
          array('name' => 'background' , 'sub_heading' => '', 'sequence' => 1 ),
          array('name' => 'mobility' , 'sub_heading' => '', 'sequence' => 2 ),
          array('name' => 'communication' , 'sub_heading' => '', 'sequence' => 3 ),
          array('name' => 'soacial interaction' , 'sub_heading' => '', 'sequence' => 4),
          array('name' => 'self-management' , 'sub_heading' => '', 'sequence' => 5 ),
          array('name' => 'self-management' , 'sub_heading' => 'Behavioural vulnerabilities', 'sequence' => 6 ),
          array('name' => 'self-management' , 'sub_heading' => 'Property damage', 'sequence' => 7 ),
          array('name' => 'self-management' , 'sub_heading' => 'Assistive technology', 'sequence' => 8 ),
          array('name' => 'learning/ employment' , 'sub_heading' => '', 'sequence' => 9 ),
          array('name' => 'self care' , 'sub_heading' => 'personal care and living skills', 'sequence' => 10 ),
          array('name' => 'self care' , 'sub_heading' => 'meals, eating and drinking', 'sequence' => 11 ),
          array('name' => 'self care' , 'sub_heading' => 'during the night', 'sequence' => 12 ),
          array('name' => 'self care' , 'sub_heading' => 'assistive technology', 'sequence' => 13 ),
          array('name' => 'overnight respite/ short term accomodation' , 'sub_heading' => '', 'sequence' => 14),
          array('name' => 'necessary therapies' , 'sub_heading' => '', 'sequence' => 15 ),
          array('name' => 'home modifications' , 'sub_heading' => '', 'sequence' => 16 ),
          array('name' => 'vehicle modifications and driving support' , 'sub_heading' => '', 'sequence' => 17 ),
          array('name' => 'support co ordination' , 'sub_heading' => '', 'sequence' => 18 ),
          array('name' => 'transport' , 'sub_heading' => '', 'sequence' => 19 ),
          array('name' => 'support network' , 'sub_heading' => '', 'sequence' => 20 ),
          array('name' => 'family and career impact statement' , 'sub_heading' => '', 'sequence' => 21 ),
          array('name' => 'proposed detailed schedule for when you leave school' , 'sub_heading' => '', 'sequence' => 22 ),

        );

        DB::table('question_headings')->insert($headings);
    }
}

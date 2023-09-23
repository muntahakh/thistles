<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\QuestionHeading;
use App\Models\QuestionOptions;
use App\Models\Answers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function QuestionList()
    {
       $secSeq =  [];
       $headingwithQuestions =  QuestionHeading::with('questions')
       ->with(['questions' => function ($q) {
           $q->orderBy('questions.sequence');

       }])->orderBy('question_headings.sequence', 'ASC')->get();

       $headingwithQuestions = $headingwithQuestions->keyBy('sequence')->toArray();

       foreach ($headingwithQuestions as  $key => $headingwithQuestion){
           if($headingwithQuestion['questions'] != []){
               foreach ($headingwithQuestion['questions'] as $key1 => $question) {

                   $headingwithQuestions[$key]['questions'][$question['sequence']]  = $question;
               }
                   unset($headingwithQuestions[$key]['questions'][0]);
           }
       }

       return $headingwithQuestions;
    }

   public function GetCurrentAndNextQuestionDetails(int $current_head_sq , int $current_question_sq)
   {
    // dd($current_head_sq , $current_question_sq);

       $list  = $this->QuestionList();
       $headIncrement = false;
       $url = null;
       $message = "";
       $repStatus   = false;
       $data = [];
       $temp_head_sq  = $current_head_sq;
       $temp_question_sq  = $current_question_sq;

       $returnData = [];

       if(isset($list[$current_head_sq]) ){
           if(isset( $list[$current_head_sq]['questions'][$current_question_sq] )){
               $qseq = $list[$current_head_sq]['questions'][$current_question_sq];

               $endkey =  array_key_last($list[$current_head_sq]['questions']);
               $status =  $current_question_sq <= $endkey ? true : false;
                // dd($status);
               while($status){
                   $current_question_sq++;
                   if($current_question_sq > $endkey){
                       $headIncrement = true;
                       $status = false;
                   }


                   if(isset($list[$current_head_sq]['questions'][$current_question_sq])){
                       $url = url('/heading/'.$current_head_sq.'/question/'.$current_question_sq);
                       $status = false;
                    }
                       $returnData = [
                           "data" =>[ 'question' => $list[$current_head_sq]['questions'][$temp_question_sq],
                                      'heading'   => $list[$current_head_sq]
                           ] ,
                           "message" => $message,
                           "status" => true,
                           "url" => $url,
                       ];


               }

           }else{
               $returnData = [
                   "data" => $data,
                   "message" => "Current Question Squence is not correct",
                   "status" => $repStatus,
                   "url" => $url,
               ];
           }

           if($headIncrement){
            // dd('---');
               $current_head_sq++;
               if(isset($list[$current_head_sq]) && $list[$current_head_sq]['questions'] != []){
                   $firstQuestion = array_key_first($list[$current_head_sq]['questions']);
                   $url = url('/heading/'.$current_head_sq.'/question/'.$firstQuestion);
                    // dd('check');
                    $returnData = [
                       "data" => [
                            'question' => $list[$temp_head_sq]['questions'][$temp_question_sq],
                            'heading'   => $list[$temp_head_sq],
                       ],
                       "message" => $message,
                       "status" => true,
                       "url" => $url,
                   ];

               }else{
                   $current_head_sq = isset($list[$current_head_sq]) ? $current_head_sq : $current_head_sq -1;
                   $current_question_sq = isset($list[$current_head_sq]['questions'][$current_question_sq]) ? $current_question_sq : $current_question_sq -1;

                   $returnData = [
                       "data" =>  [
                        'question' => $list[$current_head_sq]['questions'][$current_question_sq],
                        'heading' => $list[$current_head_sq],
                       ],
                       "message" => "Next question not found",
                       "status" => false,
                       "url" => $url,
                   ];

               }
           }
           return $returnData;
        }else{
           return [
               "data" => $data,
               "message" => "Current Heading Squence is not correct",
               "status" => $repStatus,
               "url" => $url,
           ];
       }
   }

   public function getPreviousUrl(int $current_head_sq , int $current_question_sq){

        $list = $this->QuestionList();
        $url = null;
        $headDecrement = false;
        $temp_head_sq  = $current_head_sq;
       $temp_question_sq  = $current_question_sq;
        $message = "";

        if($list[$current_head_sq]){
            if($list[$current_head_sq]['questions'][$current_question_sq]){

                $firstkey = array_key_first($list[$current_head_sq]['questions'][$current_question_sq]);
                $status = $current_head_sq <= $firstkey ? true:false;

                while($status){
                    $current_question_sq--;

                    if($current_question_sq < $firstkey){
                        $headDecrement = true;
                        $status = false;
                    }


                    if(isset($list[$current_head_sq]['questions'][$current_question_sq])){
                       $url = url('/heading/'.$current_head_sq.'/question/'.$current_question_sq);
                       $status = false;

                    return [
                        "url" => $url,
                    ];
                }
                }
                if($headDecrement){
                    $current_head_sq--;
                    if(isset($list[$current_head_sq]) && $list[$current_head_sq]['questions'] != []){

                        $lastquestion = array_key_last($list[$current_head_sq]['questions']);
                        $url = url('/heading/'.$current_head_sq.'/question/'.$lastquestion);

                        return [
                            "url" => $url,
                        ];
                    }else{
                        return [
                            "message" => 'heading decrement last question',
                        ];
                    }
                }else{
                    return back()->with('error', 'Heading not found');
                }
            }else{
                return back()->with('error', 'questions not found');
            }
        }else{
            return back()->with('error' , 'Heading not found');
        }

   }

}

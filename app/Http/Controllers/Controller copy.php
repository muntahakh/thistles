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

       $list  = $this->QuestionList();
       $headIncrement = false;
       $headDecrement = false;
       $url = null;
       $preUrl = null;
       $message = "";
       $repStatus   = false;
       $data = [];

       if(isset($list[$current_head_sq]) ){
           if(isset( $list[$current_head_sq]['questions'][$current_question_sq] )){
            // dd( $list[$current_head_sq]['questions'][$current_question_sq]);
               $qseq = $list[$current_head_sq]['questions'][$current_question_sq];

               $firstkey = array_key_first($list[$current_head_sq]['questions']);
               $endkey =  array_key_last($list[$current_head_sq]['questions']);
               $status =  $current_question_sq <= $endkey ? true : false;
               $urlStatus = $current_question_sq >= $firstkey ? true : false;

            //    dd($status , $urlStatus);


               while($status){
                   $current_question_sq++;
                   if($current_question_sq > $endkey){
                       $headIncrement = true;
                       $status = false;
                   }
                   if(isset($list[$current_head_sq]['questions'][$current_question_sq])){
                       $url = url('/heading/'.$current_head_sq.'/question/'.$current_question_sq);
                       $status = false;

                    //    while($urlStatus){
                        // $current_question_sq--;
                    //         if($current_question_sq < $firstkey){
                    //             $headDecrement = true;
                    //             $urlStatus = false;
                    //         }
                    //        if(isset($list[$current_head_sq]['questions'][$current_question_sq])){
                    //         $preUrl = url('/heading/'.$current_head_sq.'/question/'.$current_question_sq);
                    //         $urlStatus = false;

                    //         return [
                    //             "data" =>[ 'question' => $list[$current_head_sq]['questions'][$current_question_sq+1],
                    //                        'heading'   => $list[$current_head_sq]
                    //             ] ,
                    //             "message" => $message,
                    //             "status" => true,
                    //             "url" => $url,
                    //             "preUrl" => $preUrl,
                    //         ];

                    //    }
                    // }

                       return [
                           "data" =>[ 'question' => $list[$current_head_sq]['questions'][$current_question_sq-1],
                                      'heading'   => $list[$current_head_sq]
                           ] ,
                           "message" => $message,
                           "status" => true,
                           "url" => $url,
                           "preUrl" => $preUrl,
                       ];

                   }

               }

           }else{
               return [
                   "data" => $data,
                   "message" => "Current Question Squence is not correct",
                   "status" => $repStatus,
                   "url" => $url,
                   "preUrl" => $preUrl,
               ];
           }

        //    if($headDecrement){
        //     $current_head_sq--;
        //     if(isset($list[$current_head_sq]) && $list[$current_head_sq]['questions'] != []){
        //         $lastquestion = array_key_last($list[$current_head_sq]['questions']);
        //         $preUrl = url('/heading/'.$current_head_sq.'/question/'.$lastQuestion);
        //     }
        //     return [
        //         "data" => [
        //              'question' => $list[$current_head_sq-1]['questions'][$lastQuestion],
        //              'heading'   => $list[$current_head_sq-1],
        //         ],
        //         "message" => $message,
        //         "status" => true,
        //         "url" => $url,
        //         "preUrl" => $preUrl,
        //     ];

        //    }else{
        //     $current_head_sq = isset($list[$current_head_sq]) ? $current_head_sq : $current_head_sq +1;
        //     $current_question_sq = isset($list[$current_head_sq]['questions'][$current_question_sq]) ? $current_question_sq : $current_question_sq +1;

        //     return [
        //         "data" =>  [
        //          'question' => $list[$current_head_sq]['questions'][$current_question_sq],
        //          'heading' => $list[$current_head_sq],
        //         ],
        //         "message" => "Previous question not found",
        //         "status" => false,
        //         "url" => $url,
        //         "preUrl" => $preUrl,
        //     ];

        // }


           if($headIncrement){
               $current_head_sq++;
               if(isset($list[$current_head_sq]) && $list[$current_head_sq]['questions'] != []){
                   $firstQuestion = array_key_first($list[$current_head_sq]['questions']);
                   $url = url('/heading/'.$current_head_sq.'/question/'.$firstQuestion);
                    // dd('check');
                   return [
                       "data" => [
                            'question' => $list[$current_head_sq-1]['questions'][$firstQuestion],
                            'heading'   => $list[$current_head_sq-1],
                       ],
                       "message" => $message,
                       "status" => true,
                       "url" => $url,
                       "preUrl" => $preUrl,
                   ];

               }else{
                   $current_head_sq = isset($list[$current_head_sq]) ? $current_head_sq : $current_head_sq -1;
                   $current_question_sq = isset($list[$current_head_sq]['questions'][$current_question_sq]) ? $current_question_sq : $current_question_sq -1;

                   return [
                       "data" =>  [
                        'question' => $list[$current_head_sq]['questions'][$current_question_sq],
                        'heading' => $list[$current_head_sq],
                       ],
                       "message" => "Next question not found",
                       "status" => false,
                       "url" => $url,
                       "preUrl" => $preUrl,
                   ];

               }


           }






       }else{
           return [
               "data" => $data,
               "message" => "Current Heading Squence is not correct",
               "status" => $repStatus,
               "url" => $url,
               "preUrl" => $preUrl,
           ];
       }
   }

}

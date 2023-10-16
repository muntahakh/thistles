<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\reports;
use App\Models\QuestionHeading;
use App\Models\Questions;
use App\Models\Answers;
use App\Models\schedule;
use App\Models\BackUrl;
use App\Models\QuestionOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class QuestionsController extends Controller
{

    public function getQuestions(){

        $getQuestionsData = $this->QuestionList();
        $list = $this->GetCurrentAndNextQuestionDetails(1,1);

        return redirect::route('questions_loop' , [1,1]);
    }

    public function QuestionsLoop($head_sq, $question_sq){

        $getQuestionsData = $this->QuestionList();

        $list = $this->GetCurrentAndNextQuestionDetails($head_sq, $question_sq);

        $user = Auth::user();
        $quesId = $list['data']['question']['id'];
        $answer = Answers::where('user_id', $user->id)
        ->where('questions_id', $quesId)
        ->first();
        session(['list' => $list]);

        $show_schedule = true;
        return view('questions', ['list' => $list,'answer' => $answer, 'show_schedule' => $show_schedule]);

    }

    public function submitAnswers(Request $request)
    {
        $quesId = $request->quesId;
        $headingId = $request->headId;
        $question = Questions::find($quesId);
        $user = Auth::user();
        $url = $request->url;

        if ($request->has('checkboxanswer')){

            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'];
            $segments = explode('/', trim($path, '/'));
            $head_sq = (int)$segments[1];
            $question_sq = (int)$segments[3];
            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->checkboxanswer,
                    'file_name' => null,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

                return redirect()->route('options.modification', [
                'questionId' => $quesId,
                'head_sq' => $head_sq,
                'question_sq' => $question_sq,
            ]);

        }

        if ($request->has('swapcheckbox')){

            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'];
            $segments = explode('/', trim($path, '/'));
            $head_sq = (int)$segments[1];
            $question_sq = (int)$segments[3];
            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->swapcheckbox,
                    'file_name' => null,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

            return redirect()->route('swap.questions', [
                'questionId' => $quesId,
                'head_sq' => $head_sq,
                'question_sq' => $question_sq,
            ]);

        }

        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            $path = $file->storeAs('documents' , $user->id . '_' . $fileName  , 'public');

            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => null,
                    'file_name' => $user->id . '_' .$fileName,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]
                );

            return redirect($url);
        }

        if ($request->has('answer') && $request->has('cost') ) {

            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'];
            $segments = explode('/', trim($path, '/'));
            $head_sq = (int)$segments[1];
            $question_sq = (int)$segments[3];
            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->answer,
                    'file_name' => null,
                    'cost' => $request->cost,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

            return redirect()->route('questions.modifications', [
                'questionId' => $quesId,
                'headingId' => $headingId,
                'head_sq' => $head_sq,
                'question_sq' => $question_sq,
            ]);
        }
        if($request->has('radiobutton') ) {

            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'];
            $segments = explode('/', trim($path, '/'));
            $head_sq = (int)$segments[1];
            $question_sq = (int)$segments[3];
            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->radiobutton,
                    'file_name' => null,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

            return redirect()->route('replacement.modifications', [
                'questionId' => $quesId,
                'headingId' => $headingId,
                'head_sq' => $head_sq,
                'question_sq' => $question_sq,
            ]);
        }
        if($request->has('skipable') ) {

            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'];
            $segments = explode('/', trim($path, '/'));
            $head_sq = (int)$segments[1];
            $question_sq = (int)$segments[3];

            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->skipable,
                    'file_name' => null,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

            return redirect()->route('cost.sequence', [
                'questionId' => $quesId,
                'headingId' => $headingId,
                'head_sq' => $head_sq,
                'question_sq' => $question_sq,
            ]);
        }
        if(!$request->has('cost') && $request->has('answer')){

            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->answer,
                    'file_name' => null,
                    'cost' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                    'is_skipped' => 0,
                ]);

            return redirect($url);
        }
        else{
            return [
                'message' => 'No input found',
            ];
        }

    }

    public function skipSection(){

        $user = Auth::user();
        $url = url()->previous();
        $parsedUrl = parse_url($url);
        $path = $parsedUrl['path'];

        $segments = explode('/', trim($path, '/'));
        $segments[1] = (int)$segments[1] + 1;

        $modifiedUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . ':' . $parsedUrl['port'] . '/' . implode('/', $segments);

        $head_sq = (int)$segments[1] - 1 ;
        $question_sq = (int)$segments[3];

        $getSkippedQuestions = $this->GetCurrentAndNextQuestionDetails($head_sq, $question_sq );
        if(isset($getSkippedQuestions)){
            $skippedHeadingQuestions = $getSkippedQuestions['data']['heading']['questions'];

            foreach($skippedHeadingQuestions as $key => $value){
                $answer = Answers::updateOrCreate(
                    ['user_id' => $user->id, 'questions_id' => $value['id']],
                    [
                        'answer' => null,
                        'file_name' => null,
                        'cost' => null,
                        'questions_id' => $value['id'],
                        'user_id' => $user->id,
                        'is_skipped' => 1,
                    ]
                );
            }
        }else{
            return [
                'message' => 'Questions not found',
            ];
        }
        return redirect($modifiedUrl);

    }

    public function optionsModification($questionId, $head_sq, $question_sq){

        $user = auth()->user();
        $answer = Answers::where('questions_id', $questionId)->where('user_id', $user->id)->first();
        $checkQuestionOptions = QuestionOptions::where('questions_id', $questionId)->first();

        if($answer->answer == 'Yes' && $checkQuestionOptions == null){
            $getModifiedUrl = $this->getNextUrl($head_sq, $question_sq);
            return redirect($getModifiedUrl['modifiedUrl']);
        }

        if($answer->answer == 'No' && $checkQuestionOptions == null){
            $getModifiedUrl = $this->getNextUrl($head_sq, $question_sq);
            return redirect($getModifiedUrl['modifiedUrl']);
        }

        $questionSequenceAfterSelectingYes = explode(',', $checkQuestionOptions->questions_sequence);

        if($answer->answer == 'Yes' && $questionSequenceAfterSelectingYes != null && $checkQuestionOptions->options  == 'Yes'){

            foreach($questionSequenceAfterSelectingYes as $key => $value){

                $getQuestions = $this->GetCurrentAndNextQuestionDetails($head_sq, $value);
                $url = $getQuestions['url'];
                $parsedUrl = parse_url($url);
                $path = $parsedUrl['path'];

                $segments = explode('/', trim($path, '/'));
                $segments[3] = (int)$segments[3] -1 ;
                $modifiedUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . ':' . $parsedUrl['port'] . '/' . implode('/', $segments);
                return redirect($modifiedUrl);
            }
        }
        if($answer->answer == 'No' && $questionSequenceAfterSelectingYes != null && $checkQuestionOptions->options  == 'Yes'){

            foreach($questionSequenceAfterSelectingYes as $key => $value){
                $getIdofSelectedQuestions = Questions::where('sequence' , $value)->first();

                $answer = Answers::updateOrCreate(
                    ['user_id' => $user->id, 'questions_id' => $getIdofSelectedQuestions->id],
                    [
                        'answer' => null,
                        'file_name' => null,
                        'cost' => null,
                        'questions_id' => $getIdofSelectedQuestions->id,
                        'user_id' => $user->id,
                        'is_skipped' => 1,
                    ]
                );
            }
            $getModifiedUrl = $this->modifiedUrl($head_sq,$question_sq);
            return redirect($getModifiedUrl['modifiedUrl']);
        }
        else{
            return[
                'message' => 'error',
            ];
        }

    }

    public function questionsModifications($questionId, $headingId, $head_sq, $question_sq){

        $user = auth()->user();
        $answer = Answers::where('questions_id', $questionId)->where('user_id', $user->id)->first();
        $checkQuestionSequence = QuestionOptions::where('heading_id', $headingId)->first();
        $questionSequenceIfCostIsLessThan11500 = explode(',', $checkQuestionSequence->after_replacement_ques);

        $highCost = $answer->cost >= 15000;
        $midCost = $answer->cost >= 1500 && $answer->cost <= 15000;

        if($answer->cost < 1500 && $answer->cost != null){
            foreach($questionSequenceIfCostIsLessThan11500 as $key => $value){
                $getIdofSelectedQuestions = Questions::where('sequence' , $value)->first();
                $answer = Answers::updateOrCreate(
                    ['user_id' => $user->id, 'questions_id' => $getIdofSelectedQuestions->id],
                    [
                        'answer' => null,
                        'file_name' => null,
                        'cost' => null,
                        'questions_id' => $getIdofSelectedQuestions->id,
                        'user_id' => $user->id,
                        'is_skipped' => 1,
                    ]
                );
            }
            $getModifiedUrl = $this->modifiedUrl($head_sq,$question_sq);
            return redirect($getModifiedUrl['modifiedUrl']);
        }

        if($midCost){
            $getNextQuestion = $this->getNextUrl($head_sq, $question_sq);
            Session::put('midCost', $midCost);
            if(Session::has('highCost')){
                Session::forget('highCost');
            }
            return redirect($getNextQuestion['modifiedUrl']);
        }
        if($highCost){
            $getNextQuestion = $this->getNextUrl($head_sq, $question_sq);
            Session::put('highCost', $highCost);
            if(Session::has('midCost')){
                Session::forget('midCost');
            }
            return redirect($getNextQuestion['modifiedUrl']);
        }
        else{
            return [
                'message' => 'it dont work idk why',
            ];
        }

    }

    public function ReplacementModifications($questionId, $headingId, $head_sq, $question_sq){

        $user = auth()->user();
        $answer = Answers::where('questions_id', $questionId)->where('user_id', $user->id)->first();
        $midCost = Session::get('midCost');
        $highCost = Session::get('highCost');

        if($answer->answer == 'Yes' && $answer->cost == null){
            $getModifiedUrl = $this->getNextUrl($head_sq,$question_sq);
            Session::put('yes',$answer->answer == 'Yes' );
            return redirect($getModifiedUrl['modifiedUrl']);
        }

        if($answer->answer == 'No' && $answer->cost === null){

            if($midCost){
                $getModifiedUrl = $this->GetCurrentAndNextQuestionDetails($head_sq,$question_sq);
                $finalCostUrl  = $getModifiedUrl['url'];
            }

            if($highCost){
                $getModifiedUrl = $this->GetCurrentAndNextQuestionDetails($head_sq,$question_sq+1);
                $finalCostUrl  = $getModifiedUrl['url'];
            }
            return redirect($finalCostUrl);
        }

        else{
            return [
                'message' => 'it dont work idk why',
            ];
        }

    }

    public function questionsAccToCost($questionId, $headingId, $head_sq, $question_sq){
        $user = auth()->user();
        $answer = Answers::where('questions_id', $questionId)->where('user_id', $user->id)->first();
        $midCost = Session::get('midCost');
        $highCost = Session::get('highCost');
        $yes = Session::get('yes');

        if($yes && $midCost){
            $getModifiedUrl = $this->getNextUrl($head_sq, $question_sq);
            $finalUrl = $getModifiedUrl['modifiedUrl'];
            Session::forget('yes');
        }
        if($midCost && $yes == null){
            $getModifiedUrl = $this->modifiedUrl($head_sq, $question_sq);
            $finalUrl = $getModifiedUrl['modifiedUrl'];
        }

        if($yes && $highCost){
            $getModifiedUrl = $this->GetCurrentAndNextQuestionDetails($head_sq, $question_sq);
            $finalUrl = $getModifiedUrl['url'];
        }

        return redirect($finalUrl);

    }

    public function swapQuestions($questionId, $head_sq, $question_sq){

        $user = auth()->user();
        $answer = Answers::where('questions_id', $questionId)->where('user_id', $user->id)->first();

        if($answer->answer == 'Yes'){
            $getModifiedUrl = $this->getNextUrl($head_sq, $question_sq);
            $finalUrl = $getModifiedUrl['modifiedUrl'];
        }

        if($answer->answer == 'No'){
            $getModifiedUrl = $this->GetCurrentAndNextQuestionDetails($head_sq, $question_sq);
            $finalUrl = $getModifiedUrl['url'];
        }

        return redirect($finalUrl);
    }

    public function getSchedule(){

        $user = Auth::user();
        $days = config('days');
        $schedule = schedule::where('user_id', $user->id)->orderBy('day', 'ASC')->get()->toArray();

        $matchingDays = [];
        foreach ($schedule as $item) {
            $dayKey = $item['day'];

            if (isset($days[$dayKey])) {
                $matchingDays[$dayKey] = $days[$dayKey];
            }
        }
            $show_schedule = $this->show_schedule();

        return view('support', compact('matchingDays','show_schedule'));

    }

    public function addSupportDay($day, $dayKey){

        $show_schedule = $this->show_schedule();

        $day = session(['day' => $day]);
        $daykey = session(['daykey' => $dayKey]);

        return view('addSupport', compact('day', 'daykey', 'show_schedule'));

    }

    public function addSchedule(Request $request)
    {
        $headingId = $request->headingId;
        $user = Auth::user();
        $checkedDays = $request->input('days',[]);

        if($request->has('start_time') && $request->has('daykey')){
            $checkDayExistInDatabase = schedule::where('day' , $request->daykey)->where('time_period', null)->get();

            if(!$checkDayExistInDatabase){
                $startTime = $request->start_time;
                $endTime = $request->end_time;
                $time_period = $startTime . ' - ' . $endTime;
                $dayKey = $request->daykey;

                $schedule = schedule::UpdateOrCreate(
                    ['heading_id' => $headingId,
                    'user_id' => $user->id,
                    'day' => $request->daykey,
                ],
                    [
                        'heading_id' => $headingId,
                        'user_id' => $user->id,
                        'day' => $request->daykey,
                        'time_period' => $time_period,
                        'support'=> $request->support,
                        'ratio' => $request->ratio,
                        'explanation' => $request->explanation,
                    ]
                );
            }
            else{
                $startTime = $request->start_time;
                $endTime = $request->end_time;
                $time_period = $startTime . ' - ' . $endTime;
                $dayKey = $request->daykey;

                $schedule = schedule::create(
                    [
                        'heading_id' => $headingId,
                        'user_id' => $user->id,
                        'day' => $request->daykey,
                        'time_period' => $time_period,
                        'support'=> $request->support,
                        'ratio' => $request->ratio,
                        'explanation' => $request->explanation,
                    ]
                );
            }
        return redirect()->route('show.schedule', ['dayKey' => $dayKey]);
        }

        else{
            foreach($checkedDays as $day){
                $schedule = schedule::UpdateOrCreate(
                    ['heading_id' => $headingId,
                    'user_id' => $user->id,
                    'day' => $day],
                    [
                        'heading_id' => $headingId,
                        'user_id' => $user->id,
                        'day' => $day,
                        'time_period' => null,
                        'support'=> null,
                        'ratio' => null,
                        'explanation' => null,
                    ]
                );
        }
        return redirect()->route('get.schedule');

        }
    }

    public function showSchedule($dayKey){

        $user = Auth::user();
        $getSchedule = schedule::where('day' , $dayKey)
        ->where('user_id' , $user->id)
        ->whereNotNull('time_period')->get()->toArray();

        $show_schedule = $this->show_schedule();

        return view('addSupport', compact('getSchedule','show_schedule'));

    }

    public function deleteSchedule($id){
        $user = Auth::user();

        $getSchedule = schedule::where('id' , $id)
        ->delete();

        return back();
    }

    public function viewSupport(){
        $user = Auth::user();
        $getSchedule = schedule::where('user_id' , $user->id)
        ->whereNotNull('time_period')->get()->toArray();
        $show_schedule = $this->show_schedule();

        return view('ViewAllSupports', compact('getSchedule','show_schedule'));

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Background_Info;
use App\Models\User;
use App\Models\reports;
use App\Models\QuestionHeading;
use App\Models\Questions;
use App\Models\Answers;
use App\Models\schedule;
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




    public function q2(){

        $documents = documents::where(['user_id' => auth()->id(), 'entity_type' => 'App\Models\reports'])->get();
            $entityIds = $documents->pluck('entity_id');

            $reports = reports::where('user_id', auth()->id())
                ->whereIn('id', $entityIds)
                ->get();

        return view('reports', compact('documents','reports'));
    }

    public function upload(Request $request)
    {
        $user = Auth::user();
        $file = $request->file('file');
        $path = $file->store('public/documents');

        $document = Documents::create([
            'user_id' => $user->id,
            'entity_id' => null,
            'entity_type' => 'App\Models\reports',
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'file_size' => Storage::size($path),
            'file_category' => $request->file_category,
        ]);

        $uploadReports = reports::Create([
                'user_id' => $user->id,
                'file_name' => $document->file_name,
                'type' => 'upload',
            ]);

        $document->update(['entity_id' => $uploadReports->id]);

        $uniqueFileName = $document->file_name . '-' . $document->id;
        $document->update(['file_name' => $uniqueFileName]);

        return redirect()->route('documents');
    }

    public function delete($id){
        $document = documents::find($id);
        if (!$document || $document->user_id !== Auth::user()->id) {
            return redirect()->route('documents')->with('error', 'Document not found or unauthorized to delete.');
        }
        $reports = reports::find($document->entity_id);

        $reports->delete();
        Storage::delete('public/documents/' . $document->file_name);
        $document->delete();

        return redirect()->route('documents')->with('success', 'Document deleted successfully.');

    }


    public function addSection(Request $request){
            $sequence =  QuestionHeading::count() + 1;
            $section = QuestionHeading::Create(
            [
               'name' => $request->name,
               'sequence' => $sequence,
            ]);

        return redirect()->route('add.question');
    }

    public function getQuestions(){

        $getQuestionsData = $this->QuestionList();
        // dd($getQuestionsData);
        $list = $this->GetCurrentAndNextQuestionDetails(1,1);

        return redirect::route('questions_loop' , [1,1]);
    }


    public function QuestionsLoop($head_sq, $question_sq){

        $getQuestionsData = $this->QuestionList();

        $list = $this->GetCurrentAndNextQuestionDetails($head_sq, $question_sq);
        $backlist = $this->getPreviousUrl($head_sq, $question_sq);

        $user = Auth::user();
        $quesId = $list['data']['question']['id'];
        $answer = Answers::where('user_id', $user->id)
        ->where('questions_id', $quesId)
        ->first();

        return view('questions', ['list' => $list, 'backlist' => $backlist, 'answer' => $answer]);

    }

    public function submitAnswers(Request $request)
    {
        $quesId = $request->quesId;
        $question = Questions::find($quesId);
        $user = Auth::user();
        $url = $request->url;


        if ($request->has('checkboxanswer')) {

            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->checkboxanswer,
                    'file_name' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                ]
            );
            return redirect($url);
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $fileName = $file->getClientOriginalName();

            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => null,
                    'file_name' => $fileName,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                ]
                );

            return redirect($url);
        }

        // Check for text answer
        if ($request->has('answer')) {
            $answer = Answers::updateOrCreate(
                ['user_id' => $user->id, 'questions_id' => $quesId],
                [
                    'answer' => $request->answer,
                    'file_name' => null,
                    'questions_id' => $quesId,
                    'user_id' => $user->id,
                ]
            );

            return redirect($url);
        }

        else{
            return back()->with('error', 'No input found');
        }
    }

    public function addSchedule(Request $request)
    {
        $headingId = $request->headingId;
        $user = Auth::user();
        $checkedDays = $request->input('days',[]);

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

    public function getSchedule(){
        $user = Auth::user();
        $days = config('days');
        $schedule = schedule::where('user_id', $user->id)->orderBy('day', 'ASC')->get()->toArray();


        foreach($days as $key => $value){
            foreach($value as $key1 => $value1){
               $final= $schedule[$key] == $days[$key];
                dd($final);
            }
        }

        //     if (isset($schedule)) {
        //         foreach ($days as $key => $dayName) {
        //             $day =$schedule[$key]['day'];
        //             $allDays= $days[$key]>= $day;

        //         dd($allDays);

        //     }
        // }else {
            //     dd('hukhk');
            //     $matchedSchedule[$key] = null; // Or any default value you want
            // }
            return back()->with('schedule', $schedule);
        }

}

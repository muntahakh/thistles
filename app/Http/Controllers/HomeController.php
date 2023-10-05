<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\{ User , QuestionHeading, Questions, QuestionOptions, Answers};
use App\Models\reports;
use App\Models\GeneratedReports;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function home()
    {
        return view('home');
    }

    public function AllData(){
        $user = Auth::user();

        $questionsWithHeadingAndAnswers= Answers::select(
            'answers.*' , 'questions.*' , 'question_headings.name as question_headings_name' ,
            'question_headings.sub_heading as question_headings_sub_heading',)
            ->join('questions', 'questions.id', 'answers.questions_id')
            ->join('question_headings', 'question_headings.id', 'questions.heading_id')
            ->where('answers.user_id', $user->id)->get()->toArray();
        return $questionsWithHeadingAndAnswers;

    }

    public function compiledData(){

        $data = $this->AllData();
        // dd($data);
        $finalData = [];
        foreach($data as $key => $detail){
            $finalData = [
                'data' => [
                'question_headings_name' => $detail['question_headings_name'],
                'question_headings_sub_heading' => $detail['question_headings_sub_heading'],
                'questions' => $detail['questions'],
                'answer' => $detail['answer'],
                'cost' => $detail['cost'],
                ]
            ];

        }

        dd($finalData);
    }

    public function eula()
    {
        return view('eula');
    }

    public function compiled() {
        return view('documentCompiled');
    }

    public function index(){

        if (auth()->check()) {
            return view('homeAth');
        } else {
            return redirect()->route('signin');
        }
    }

    public function ask(Request $request)
    {
        $prompt = $request->input('prompt');
        try {
        } catch (\Exception $e) {
        } finally {
        }
        $response = $this->askToChatGPT($prompt);
        // return view('response', ['response' => $response]);
    }

    private function askToChatGPT($prompt)
    {
        // echo $prompt;
        // die();
        // dd(env('CHATGPT_API_KEY'));
        // dd( );
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                "model" => "gpt-3.5-turbo",
                "messages" => [["role" => "user", "content"=> $prompt]],
                "max_tokens" => 3000,
                "temperature" => 0.5
            ]);
            // dd($response->json());
            $user = Auth::user();
            $reports = reports::updateOrCreate([
                'user_id' => $user->id,  'type' => 'generated',
            ],[
                'file_name' => 'report-' . $user->id,
                'user_id' => $user->id,
                'type' => 'generated',
            ]);

            $getReportsId = reports::where('type', 'generated')
            ->where('user_id', $user->id)
            ->first();


            if ($response->successful()) {
                $responseData = $response->json();
                dd($responseData);
                $generatedText = json_encode($responseData['choices'][0]);
                // return response()->json(['generated_text' => $generatedText]);
                $json_decode = json_decode($generatedText);
                echo $generatedText;
                // $getReportsId = reports::where('type', 'generated')
                // ->where('user_id', $user->id)
                // ->first();

                // if($getReportsId ){
                // $generatedReport  = GeneratedReports::updateOrCreate([
                //     'user_id' => $user->id, 'entity_id' => $getReportsId->id,
                // ],[
                //     'entity_id' => $getReportsId->id,
                //     'user_id' => $user->id,
                //     'report' => $generatedText,
                // ]);
                // return "updated";
                // }else{
                //     return "Reports not found";
                // }

            } else {
                return response()->json(['error' => 'API request failed'], $response->status());
            }

        // $rep = $response->json();
        // if (isset($rep['error'])) {
        //     echo "<pre>";
        //     print_r($response->json());
        //     echo "<pre>";
        // }
        // if ($rep['choices']) {
        //     return $response->json()['choices'][0]['text'];
        // }
    }
}

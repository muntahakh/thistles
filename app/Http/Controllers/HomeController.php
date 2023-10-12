<?php

namespace App\Http\Controllers;

use App\Events\GenerateReportEvent;
use App\Models;
use App\Models\{ User , QuestionHeading, Questions, QuestionOptions, Answers, schedule,reports};
use App\Models\GeneratedReports;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Spatie\PdfToText\Pdf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ini_set('max_execution_time', 1200);
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
            'answers.*' , 'questions.questions' , 'question_headings.name as question_headings_name' ,
            'question_headings.sub_heading as question_headings_sub_heading',)
            ->join('questions', 'questions.id', 'answers.questions_id')
            ->join('question_headings', 'question_headings.id', 'questions.heading_id')
            ->where('answers.user_id', $user->id)->get()->toArray();

        return $questionsWithHeadingAndAnswers;

    }

    public function compiledData(){
        $user = Auth::user();
        $data = $this->AllData();
        $finalData = [];

        foreach ($data as $key => $detail) {

            $finalData[$detail['questions_id']] = [
                'question_headings_name' => $detail['question_headings_name'],
                'question_headings_sub_heading' => $detail['question_headings_sub_heading'],
                'questions' => $detail['questions'],
                'answer' => $detail['answer'],
                'cost' => $detail['cost'],
            ];
        }

        $fileText = null;
        $pdfPath = public_path('storage/documents/' . $detail['file_name']);
        if (PHP_OS === 'WINNT') {
            $fileText = (new Pdf(Config::get('pdf.pdf_to_text.options.pdftotext_path')))
                ->setPdf($pdfPath)
                ->text();
        }else{

            $fileText = (new Pdf())
                ->setPdf($pdfPath)
                ->text();
        }

        // dd($fileText);

        $schedule = schedule::where('user_id' , $user->id)->whereNotNull('time_period')->get()->toArray();
        // dd($fileText,  $schedule);
        // event(new GenerateReportEvent($user->id, $finalData));
        $response = Http::post('http://167.99.36.48:7020/generate_report', ['responses' => $finalData , 'user_id' => $user->id, 'name' => $user->name . '_'. $user->id]);
        return redirect()->route('waiting');

    }

    public function eula()
    {
        return view('eula');
    }

    public function waiting() {
        return view('waiting');
    }

    public function compiled() {

        $user = Auth::user();
        $report = reports::where('user_id' , $user->id)->get();
        return view('documentCompiled', compact('report'));

    }

    public function index(){

        $answer = Answers::where('user_id', auth()->user()->id)->get()->toArray();
        if (auth()->check()) {
            return view('homeAth', compact('answer'));
        } else {
            return redirect()->route('signin');
        }
    }

    public function getGeneratedFile(Request $request){

        $request->validate(
            [
                'user_id' => "required|integer",
                'file_name' => "required|string"
            ],
        );

         reports::UpdateOrCreate(
            ['user_id' => $request->user_id],
            [
                'user_id' => $request->user_id,
                'file_name' => $request->file_name,
            ]
        );

        $user = User::find($request->user_id);
        $user->sendDocumentationNotification();
        return response('');

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

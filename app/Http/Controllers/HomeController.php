<?php

namespace App\Http\Controllers;

use App\Events\GenerateReportEvent;
use App\Models;
use App\Models\{User, QuestionHeading, Questions, QuestionOptions, Answers, schedule, reports};
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

    public function AllData()
    {
        $user = Auth::user();

        $questionsWithHeadingAndAnswers = Answers::select('answers.*', 'questions.questions', 'question_headings.name as question_headings_name', 'question_headings.sub_heading as question_headings_sub_heading')
            ->join('questions', 'questions.id', 'answers.questions_id')
            ->join('question_headings', 'question_headings.id', 'questions.heading_id')
            ->where('answers.user_id', $user->id)
            ->get()
            ->toArray();

        return $questionsWithHeadingAndAnswers;
    }

    public function compiledData()
    {
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

        if($detail['file_name'] !== null){
        $careerstatement = null;
        $pdfPath = public_path('storage/documents/' . $detail['file_name']);

        if (PHP_OS === 'WINNT') {
            $careerstatement = (new Pdf(Config::get('pdf.pdf_to_text.options.pdftotext_path')))->setPdf($pdfPath)->text();
        } elseif(PHP_OS === 'Darwin') {
            $careerstatement = (new Pdf(Config::get('pdf.pdf_to_text.options.pdftotext_path')))
            ->setPdf($pdfPath)
            ->text();
        }else{
            $careerstatement = (new Pdf())->setPdf($pdfPath)->text();
        }
        }
        else{
            $careerstatement = null;
        }

        $schedule = schedule::where('user_id', $user->id)
            ->whereNotNull('hours')
            ->get()
            ->toArray();

        if($schedule !== [] ){

            foreach($schedule as $key => $tableData){

                $scheduleData[$tableData['id']]= [
                    'days' => $tableData['day'],
                    'hours' => $tableData['hours'],
                    'timesOfDay' => $tableData['times_of_day'],
                    'support' => $tableData['support'],
                    'ratio' => $tableData['ratio'],
                    'explanation' => $tableData['explanation'],

                ];
            }
            $response = Http::post('http://167.99.36.48:7020/generate_report', [
                'responses' => $finalData,
                'career_statement' => $careerstatement,
                'schedule' => $scheduleData,
                'user_id' => $user->id,
                'name' => $user->name . '_' . $user->id
                ]);

            return redirect()->route('waiting');

        }
        else{
            return back()->with('error', 'Please update the schedule.');
        }


    }

    public function eula()
    {
        return view('eula');
    }

    public function waiting()
    {
        return view('waiting');
    }

    public function compiled()
    {
        $user = Auth::user();
        $report = reports::where('user_id', $user->id)->first();
        return view('documentCompiled', compact('report'));
    }

    public function index()
    {
        $answer = Answers::where('user_id', auth()->user()->id)
            ->get()
            ->toArray();
        if (auth()->check()) {
            return view('homeAth', compact('answer'));
        } else {
            return redirect()->route('signin');
        }
    }

    public function getGeneratedFile(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'file_name' => 'required|string',
        ]);

        reports::UpdateOrCreate(
            ['user_id' => $request->user_id],
            [
                'user_id' => $request->user_id,
                'file_name' => $request->file_name,
            ],
        );

        $user = User::find($request->user_id);
        $user->sendDocumentationNotification();
        return response('');
    }
}

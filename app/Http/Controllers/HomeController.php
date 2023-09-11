<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\User;
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

    public function userDetails(){
        $user = Auth::user();
        $details = $user->GetAllDetails()['data'];

        $backgroundInfo = $details['backgroundInfo']->toArray();
         $documents = $details['uploadedDocuments'];
        $shortTermGoals = $details['getShortTermGoals'];
        $longTermGoals = $details['getLongTermGoals'];
        $communication = $details['getCommunication'];
        $behaviouralVulnerabilities = $details['getBehaviouralVulnerabilities'];
        $perosnalCare = $details['getPerosnalCare'];
        $mealsEating = $details['getMealsEating'];
        $duringNights = $details['getDuringNights'];
        $propertyDamage = $details['getPropertyDamage'];
        $supportRegular = $details['getSupportRegular'];
        $supportOccasional = $details['getSupportOccasional'];
        $ongoingTherapySupport = $details['getOngoingTherapySupport'];
        $aidsAssistiveTechnology = $details['getAidsAssistiveTechnology'];
        $parentalStatement = $details['getParentalStatement'];

// dd($backgroundInfo ,$documents, $shortTermGoals, $longTermGoals, $communication, $behaviouralVulnerabilities,
// $perosnalCare, $mealsEating, $duringNights, $propertyDamage, $supportRegular, $supportOccasional,
// $ongoingTherapySupport, $aidsAssistiveTechnology, $parentalStatement);

        $string = "I want to write a sample report of a child. Who's name is " . $backgroundInfo['child_name']. ". \n \n".
        " Some basic details are that his/her gender is ".$backgroundInfo['gender'] .
        ", condition is ". $backgroundInfo['child_condition'] . "\n \n" .
        "Short Term Goals he/she wants to achieve in social participation are " . $shortTermGoals['social_participation'] .
        ", relating to health and physical capacity are ". $shortTermGoals['health_welfare'] . ", relating to education
        and ongoing learning are " . $shortTermGoals['skill_development'] . ", relating to living arrangements are " .
        $shortTermGoals['living_arrangements'] . ". \n \n" .
        " Long Term goals he/she wants to achieve in same categories as short term respectively are " . $longTermGoals['social_participation'] .
        ", " . $shortTermGoals['health_welfare'] . ", " . $shortTermGoals['skill_development'] . ", " .  $shortTermGoals['living_arrangements'] .
        " . \n \n" .
        " Communication challenges he/she faces : " . $communication['value'] . ". \n \n" .
        " His/her behavioural vulnerabilities are : " . $behaviouralVulnerabilities['value'] . ".\n \n," .
        " Personal care challenges he/she faces : " . $perosnalCare['value'] . ". \n" .
        " The Meals " . $backgroundInfo['child_name'] . " takes throughout the day are : " . $mealsEating['value'] . ". \n \n" .
        " Challenges he/she faces at night are : " . $duringNights['value'] . ". \n \n" .
        " Property damage he/she caused : " . $propertyDamage['value'] . ". \n \n" .
        " Support he/she required regularly are : " . $supportRegular['value'] . ". \n \n" .
        " Support he/she required occasionally are : " . $supportOccasional['value'] . ". \n \n" .
        " Ongoing therapies and capacity building supports of " . $backgroundInfo['child_name'] . " are : " . $duringNights['value'] . ". \n \n" .
        " Support he/she required occasionally are : " . $supportOccasional['value'] . ". \n \n" .
        " The aids and equivalent resources required for the assistive technology he/she uses are : " . $aidsAssistiveTechnology['value'] . ". \n \n" .
        " Statement by " . $backgroundInfo['child_name'] . " parents : " . $aidsAssistiveTechnology['value'] . "."
        ;
        // $string = nl2br($string);
        // echo $string;

        // dd($string);
        return redirect()->route('ask', ['prompt' => $string]);
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

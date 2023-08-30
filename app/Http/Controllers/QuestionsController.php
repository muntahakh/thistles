<?php

namespace App\Http\Controllers;

use App\Models\Background_Info;
use App\Models\User;
use App\Models\goals;
use App\Models\metadata;
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


class QuestionsController extends Controller
{
    public function q1() {
        $user = Auth::user();
        $backgroundInfo = $user->backgroundInfo;
        return view('backgroundInfo',compact('user', 'backgroundInfo'));
    }

    public function bgInfo(Request $request, $id){

        $user = User::where('id' , $id)->first();
        if($user){

            $bgInfo = Background_Info::updateOrCreate(
                ['user_id' => $id],
                [
                    'child_name' => $request->child_name,
                    'participant_num' => $request->participant_num,
                    'gender' => $request->gender,
                    'child_condition' => $request->details,
                ]
            );
        }
        else{
            $bgInfo = new Background_Info();
            $bgInfo->child_name = $request->child_name;
            $bgInfo->participant_num = $request->participant_num;
            $bgInfo->gender = $request->gender;
            $bgInfo->child_condition = $request->details;
            $bgInfo->user_id = $id;
            // Save the data to the database
            $bgInfo->save();
        }

        return redirect()->route('documents', ['id' => $user->id]); // Redirect to a success page or any other page
    }

    public function q2() {
        return view('reports');
    }

    // public function documents(Request $request){

    // }

    public function q3() {
        $user = Auth::user();
        $goals = $user->goals()->where('type', 'short_term')->first();
        return view('goals',compact('user', 'goals'));
    }

    public function short_term_goals(Request $request){

        $validatedData = $request->validate([
            'social_participation' => 'nullable|string',
            'health_welfare' => 'nullable|string',
            'living_arrangements' => 'nullable|string',
            'skill_development' => 'nullable|string',
        ]);

        $user = Auth::user();

            $goals = goals::updateOrCreate(
            ['user_id' => $user->id , 'type' => 'short_term'],
            [
                'social_participation' => $request->social_participation,
                'health_welfare' => $request->health_welfare,
                'living_arrangements' => $request->living_arrangements,
                'skill_development' => $request->skill_development,
                'type' => 'short_term',
            ]);

        // Redirect or return response
        return redirect()->route('q4')->with('success', 'Goal saved successfully');
    }

    public function q4() {
        $user = Auth::user();
        $goals = $user->goals()->where('type', 'long_term')->first();
        return view('question4',compact('user', 'goals'));
    }

    public function long_term_goals(Request $request){

        $validatedData = $request->validate([
            'social_participation' => 'nullable|string',
            'health_welfare' => 'nullable|string',
            'living_arrangements' => 'nullable|string',
            'skill_development' => 'nullable|string',
        ]);

        $user = Auth::user();

            $goals = goals::updateOrCreate(
            ['user_id' => $user->id , 'type' => 'long_term'],
            [
                'social_participation' => $request->social_participation,
                'health_welfare' => $request->health_welfare,
                'living_arrangements' => $request->living_arrangements,
                'skill_development' => $request->skill_development,
                'type' => 'long_term',
            ]);

        // Redirect or return response
        return redirect()->route('q5')->with('success', 'Goal saved successfully');
    }



    public function metadata(Request $request) {
        $user = Auth::user();
        $communication = $request->metadata;
        $current = session('metadata_current');

        if($current != "" && $current != null ){
            $metadata = metadata::updateOrCreate(
                ['user_id' => $user->id , 'name' => $current ],
                [
                    'value' => $request->metadata,
                ]);

                session(['metadata_current' => null]);
                $currentRoute = URL::current();

                return redirect()->route($request->next_route)->with('success', $current.' value updated successfully');
        }
        else{

            return redirect()->route($request->current_route)->with('success', $current.' value updated successfully');

        }

    }

    public function q5() {
        session(['metadata_current' => 'communication']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'communication')->first();
        return view('question5', compact('user', 'metadata'));
    }
    public function q6() {
        session(['metadata_current' => 'behavioural_vulnerabilities']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'behavioural_vulnerabilities')->first();
        return view('question6', compact('user', 'metadata'));
    }

    public function q7() {
        session(['metadata_current' => 'perosnalcare_livingskills']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'perosnalcare_livingskills')->first();
        return view('question7', compact('user', 'metadata'));
    }

    public function q8() {
        session(['metadata_current' => 'meals_eating']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'meals_eating')->first();
        return view('question8', compact('user', 'metadata'));
    }

    public function q9() {
        session(['metadata_current' => 'during_nights']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'during_nights')->first();
        return view('question9', compact('user', 'metadata'));
    }

    public function q10() {
        session(['metadata_current' => 'property_damage']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'property_damage')->first();
        return view('question10', compact('user', 'metadata'));
    }

    public function q11() {
        session(['metadata_current' => 'support_regular']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'support_regular')->first();
        return view('question11', compact('user', 'metadata'));
    }

    public function q12() {
        session(['metadata_current' => 'support_occasional']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'support_occasional')->first();
        return view('question12', compact('user', 'metadata'));
    }

    public function q13() {
        session(['metadata_current' => 'ongoing_therapy_support']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'ongoing_therapy_support')->first();
        return view('question13', compact('user', 'metadata'));
    }

    public function q14() {
        session(['metadata_current' => 'aids_assistive_technology']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'aids_assistive_technology')->first();
        return view('question14', compact('user', 'metadata'));
    }

    public function q15() {
        session(['metadata_current' => 'parental_statement']);
        $user = Auth::user();
        $metadata = $user->metadata()->where('name', 'parental_statement')->first();
        return view('question15', compact('user', 'metadata'));
    }
}

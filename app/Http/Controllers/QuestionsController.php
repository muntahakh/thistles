<?php

namespace App\Http\Controllers;

use App\Models\Background_Info;
use App\Models\User;
use App\Models\goals;
use App\Models\metadata;
use App\Models\documents;
use App\Models\reports;
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
    public function q1() {
        $user = Auth::user();
        $backgroundInfo = $user->backgroundInfo;
        return view('backgroundInfo',compact('user', 'backgroundInfo'));
    }

    public function bgInfo(Request $request){

        $user = Auth::user();

            $bgInfo = Background_Info::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'child_name' => $request->child_name,
                    'participant_num' => $request->participant_num,
                    'gender' => $request->gender,
                    'child_condition' => $request->details,
                ]
            );

        return redirect()->route('documents');
    }

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

        $current = session('metadata_current');

        if($current != "" && $current != null ){

            $wordCount = str_word_count($request->metadata);
            if ($wordCount >= 20) {
                $metadata = metadata::updateOrCreate(
                    ['user_id' => $user->id , 'name' => $current ],
                    [
                        'value' => $request->metadata,
                    ]);

                    session(['metadata_current' => null]);
                    $currentRoute = URL::current();

                    return redirect()->route($request->next_route);
            }
            else{
                return redirect()->route($request->current_route)->with('error', 'Answer should be atleast 3 lines');

            }

        }
        else{

            return redirect()->route($request->current_route)->with('error', 'Error updating value');

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

}


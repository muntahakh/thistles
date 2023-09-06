<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\User;
use Illuminate\Support\Facades\Http;



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

    public function test()
    {
        $user  = User::find(9);
        dd($user->GetAllDetails() );
        return view('home');
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
        return view('response', ['response' => $response]);
    }
    private function askToChatGPT($prompt)
    {
        // dd(env('CHATGPT_API_KEY'));
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
                "prompt" => $prompt,
                "max_tokens" => 3000,
                "temperature" => 0.5
            ]);
        $rep = $response->json();
        if (isset($rep['error'])) {
            echo "<pre>";
            print_r($response->json());
            echo "<pre>";
        }
        if ($rep['choices']) {
            return $response->json()['choices'][0]['text'];
        }
    }
}

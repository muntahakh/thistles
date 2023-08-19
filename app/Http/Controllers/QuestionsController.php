<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class QuestionsController extends Controller
{
    public function q1() {
        return view('backgroundInfo');
    }

    public function q2() {
        return view('reports');
    }

    public function q3() {
        return view('goals');
    }

    public function q4() {
        return view('question4');
    }

    public function q5() {
        return view('question5');
    }

    public function q6() {
        return view('question6');
    }

    public function q7() {
        return view('question7');
    }

    public function q8() {
        return view('question8');
    }

    public function q9() {
        return view('question9');
    }

    public function q10() {
        return view('question10');
    }

    public function q11() {
        return view('question11');
    }

    public function q12() {
        return view('question12');
    }

    public function q13() {
        return view('question13');
    }

    public function q14() {
        return view('question14');
    }

    public function q15() {
        return view('question15');
    }
}

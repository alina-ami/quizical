<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $answeredQuestionsIds = $user->answers->pluck('question_id');

        $questions = Question::whereNotIn('id', $answeredQuestionsIds)->get();

        return view('web.home.index')
            ->with('questions', $questions);
    }
}

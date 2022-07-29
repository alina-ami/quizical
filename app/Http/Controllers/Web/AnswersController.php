<?php

namespace App\Http\Controllers\Web;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\AnswerRequest;

class AnswersController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $answers = Answer::where('user_id', 2)
            ->latest()
            ->paginate(12);

        return view('web.answers.index')->with('answers', $answers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('web.answers.show');
    }
}

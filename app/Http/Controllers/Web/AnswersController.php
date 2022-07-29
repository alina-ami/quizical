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

        $answersCount = Answer::where('user_id', 2)->count();

        return view('web.answers.index')->with('answers', $answers)->with('answersCount', $answersCount)->with('user', $user);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $question->delete();
        return redirect()->back();
    }
}

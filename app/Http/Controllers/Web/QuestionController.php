<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\AnswerRequest;

class QuestionController extends Controller
{
    public function answer(Request $request, Question $question)
    {
        return view('web.question.answer')
            ->with('question', $question);
    }

    public function storeAnswer(AnswerRequest $request, Question $question)
    {
        $user = auth()->user();

        $answer = $question->answers()->create([
            'user_id' => $user->id,
            'answer' => $request->answer,
            'points_earned' => $question->points_for_answer,
        ]);

        $user->increment('total_points_earned', $answer->points_earned);

        return view('web.question.post-answer')
            ->with([
                'question' => $question,
                'answer' => $answer,
            ]);
    }
}

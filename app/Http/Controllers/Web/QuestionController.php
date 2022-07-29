<?php

namespace App\Http\Controllers\Web;

use App\Models\Answer;
use Sentiment\Analyzer;
use App\Models\Question;
use Illuminate\Http\Request;
use DonatelloZa\RakePlus\RakePlus;
use App\Http\Controllers\Controller;
use PhpScience\TextRank\TextRankFacade;
use App\Http\Requests\Web\AnswerRequest;
use Illuminate\Database\Eloquent\Builder;
use PhpScience\TextRank\Tool\StopWords\English;

class QuestionController extends Controller
{

    public function index(Request $request)
    {
        $questions = Question::whereDoesntHave(
            'answers',
            fn (Builder $query) => $query->where('user_id', $request->user()->id)
        )->with('brand')->latest()->paginate(6);

        if ($questions->isEmpty()) {
            $questions = Question::inRandomOrder()->paginate(6);
        }

        return view('web.questions.index')
            ->with('questions', $questions);
    }

    public function show(Question $question)
    {
        return view('web.questions.show')
            ->with('question', $question);
    }

    public function update(AnswerRequest $request, Question $question)
    {
        $text = $request->answer;
        $keywords = $this->getTextKeywords($text);
        $pointsEarned = $question->points_for_answer;

        if (count($keywords) > 3) {
            $pointsEarned += $question->points_for_relevance;
        }

        $answer = Answer::create([
            'question_id' => $question->id,
            'user_id' => $request->user()->id,
            'answer' => $text,
            'keywords' => $keywords,
            'sentiment' => $this->getTextSentiment($text),
            'summary' => $this->getTextSummary($text),
            'points_earned' => $pointsEarned,
        ]);
        $request->user()->increment('total_points_earned', $answer->points_earned);

        return redirect()->route('web.questions.success', $question->id);
    }

    public function success(Request $request, Question $question)
    {
        $answer = $question->answers()
            ->where('user_id', $request->user()->id)
            ->first();

        return view('web.questions.success')
            ->with('question', $question)
            ->with('answer', $answer);
    }

    private function getTextKeywords(string $text): array
    {
        return RakePlus::create($text)->get();
    }

    private function getTextSentiment(string $text): array
    {
        $sentimentAnalyzer = new Analyzer();

        return $sentimentAnalyzer->getSentiment($text);
    }

    private function getTextSummary(string $text): array
    {
        $api = new TextRankFacade();
        $stopWords = new English();
        $api->setStopWords($stopWords);

        return $api->summarizeTextBasic($text);
    }
}

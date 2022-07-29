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
use PhpScience\TextRank\Tool\StopWords\English;

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

        $text = $request->answer;

        $keywords = $this->getTextKeywords($text);
        $sentiment = $this->getTextSentiment($text);
        $summary = $this->getTextSummary($text);

        $pointsEarned = $question->points_for_answer;

        if (count($keywords) > 3) {
            $pointsEarned += $question->points_for_relevance;
        }

        $answer = Answer::create([
            'question_id' => $question->id,
            'user_id' => $user->id,
            'answer' => $text,
            'keywords' => $keywords,
            'sentiment' => $sentiment,
            'summary' => $summary,
            'points_earned' => $pointsEarned,
        ]);

        $user->increment('total_points_earned', $answer->points_earned);

        return view('web.question.post-answer')
            ->with([
                'question' => $question,
                'answer' => $answer,
            ]);
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

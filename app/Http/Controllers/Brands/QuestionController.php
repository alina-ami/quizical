<?php

namespace App\Http\Controllers\Brands;

use GuzzleHttp\Client;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Brands\Questions\StoreQuestionRequest;
use App\Http\Requests\Brands\Questions\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::where('brand_id', 1)
            ->withCount('answers')
            ->latest()
            ->paginate(12);

        return view('brands.questions.index')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $question = Question::create([
            'brand_id' => 1,
            'points_for_relevance' => 10,
            'points_for_answer' => 5,
            ...$request->validated(),
        ]);

        return redirect()->route('brands.questions.show', $question->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $answersSentiment = $question->answers->reduce(function($results, $answer) {
            $results[$answer->sentiment['type']] += 1;
            $results['total'] +=1;

            return $results;
        }, [
            'positive' => 0,
            'negative' => 0,
            'neutral' => 0,
            'total' => 0,
        ]);


        if ($answersSentiment['total']){
            $sentimentPercentages = [
                "positive" => intval($answersSentiment["positive"] / $answersSentiment["total"] * 100),
                "negative" => intval($answersSentiment["negative"] / $answersSentiment["total"] * 100),
                "neutral" => intval($answersSentiment["neutral"] / $answersSentiment["total"] * 100),
            ];
        } else {
            $sentimentPercentages = ["positive" => 0,"negative" => 0,"neutral" => 0];
        }


        $topKeywordsImage = Cache::remember("question_{$question->id}_top_keywords", 60*60*12, function () use ($question) {
            $client = new Client();

            $response = $client->post('https://quickchart.io/wordcloud', [
                'json' => [
                    "text" => $question->answers->pluck('answer')->implode(" ") ?: 'No results',
                    "removeStopwords" => true,
                    "width" => 500,
                    "height" => 300,
                    "format" => 'png',
                    "maxNumWords" => 20
                ]
            ]);

            return base64_encode($response->getBody());
        });

        return view('brands.questions.show')->with(
            'question',
            $question->loadCount('answers')
        )->with([
            'answers' => $question->answers()->latest()->paginate(15),
            'topKeywordsImage' => $topKeywordsImage,
            'sentimentPercentages' => $sentimentPercentages,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('brands.questions.edit')
            ->with('question', $question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question->update($request->validated());

        return redirect()->route('brands.questions.show', $question->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->back();
    }
}

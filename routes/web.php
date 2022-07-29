<?php

use Sentiment\Analyzer;
use Illuminate\Support\Facades\Route;
use PhpScience\TextRank\TextRankFacade;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Brands\HomeController;
use App\Http\Controllers\Brands\QuestionController;
use App\Http\Controllers\Web\HomeController as WebHomeController;
use App\Http\Controllers\Web\ProfileController as WebProfileController;
use App\Http\Controllers\Web\Auth\LoginController as WebLoginController;
use App\Http\Controllers\Web\QuestionController as WebQuestionController;
use App\Http\Controllers\Brands\Auth\LoginController as BrandsLoginController;
use App\Http\Controllers\Web\AnswersController as WebAnswersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::prefix('/')->as('web.')->group(function () {
    Route::as('auth.')->group(function () {
        Route::get('/login', [WebLoginController::class, 'login'])->name('login');
        Route::post('/login', [WebLoginController::class, 'doLogin'])->name('do-login');
        Route::get('/login/google', [WebLoginController::class, 'google'])->name('google');

        Route::get('/logout', [WebLoginController::class, 'logout'])->name('logout');
        Route::get('/register', [WebLoginController::class, 'register'])->name('register');
        Route::post('/register', [WebLoginController::class, 'doRegister'])->name('do-register');
    });

    Route::get('/', [WebHomeController::class, 'index'])->name('home');
    Route::prefix('/questions')->as('questions.')->group(function () {
        Route::get('/{question}/answer', [WebQuestionController::class, 'answer'])->name('answer');
        Route::post('/{question}/submit-answer', [WebQuestionController::class, 'storeAnswer'])->name('store-answer');
    });


    Route::prefix('/profile')->as('profile.')->group(function () {
        Route::get('/', [WebProfileController::class, 'profile'])->name('create');
        Route::post('/', [WebProfileController::class, 'store'])->name('store');
    });

    Route::prefix('/answers')->as('answers.')->group(function () {
        Route::get('/', [WebAnswersController::class, 'index'])->name('index');
        Route::post('/{answer}', [WebAnswersController::class, 'show'])->name('show');
    });
});



Route::prefix('brands')->as('brands.')->group(function () {
    Route::prefix('auth')->as('auth.')->group(function () {
        Route::get('/login', [BrandsLoginController::class, 'login'])->name('login');
        Route::post('/login', [BrandsLoginController::class, 'doLogin'])->name('do-login');
        Route::get('/login/google', [BrandsLoginController::class, 'google'])->name('google');

        Route::get('/logout', [BrandsLoginController::class, 'logout'])->name('logout');
        Route::get('/register', [BrandsLoginController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('questions', QuestionController::class);
    });
});


Route::get('analyse-text', function () {
    $text = "I weigh 115 but my bust is usually around 32DDD, bigger actually since I'm currently breastfeeding... so I ordered a medium. I should have probably ordered a small or even extra small. The waist was pretty large. Like there is a giant gap. I just tied the back stap together tighter so I can still make it work. but when I get a different color, which I intent to because of how beautiful this set is, I will definitely get a size smaller. Plus this hides love handles and the mom tummy like a charm.";
    // $tokens = tokenize($text);

    // $rake = rake($tokens);
    // $results = $rake->getKeywordScores();

    // return response()->json($results);

    // $text = "Criteria of compatibility of a system of linear Diophantine equations, " .
    //     "strict inequations, and nonstrict inequations are considered. Upper bounds " .
    //     "for components of a minimal set of solutions and algorithms of construction " .
    //     "of minimal generating sets of solutions for all types of systems are given.";

    // $phrases = DonatelloZa\RakePlus\RakePlus::create($text)->get();
    // $sentimentScores = vader($tokens);
    // return response()->json($sentimentScores);

    // $analyzer = new Analyzer();

    // $output_text = $analyzer->getSentiment("David is smart, handsome, and funny.");

    // $output_emoji = $analyzer->getSentiment("😁");

    // $output_text_with_emoji = $analyzer->getSentiment("Aproko doctor made me 🤣.");

    // print_r($output_text);
    // print_r($output_emoji);
    // print_r($output_text_with_emoji);

    // use PhpScience\TextRank\Tool\StopWords\English;

    // String contains a long text, see the /res/sample1.txt file.
    // $text = "Lorem ipsum...";

    $api = new TextRankFacade();
    // English implementation for stopwords/junk words:
    $stopWords = new PhpScience\TextRank\Tool\StopWords\English();
    $api->setStopWords($stopWords);

    // Array of the most important keywords:
    $result = $api->getOnlyKeyWords($text);

    // // Array of the sentences from the most important part of the text:
    // $result = $api->getHighlights($text);

    // Array of the most important sentences from the text:
    // $result = $api->summarizeTextBasic($text);

    return response()->json($result);
});

<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::paginate(6);

        return view('web.home.index')
            ->with('questions', $questions);
    }
}

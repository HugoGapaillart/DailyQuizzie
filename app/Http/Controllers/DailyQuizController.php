<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Repositories\DailyQuizInterface;

class DailyQuizController extends Controller
{
    public function __construct(private readonly DailyQuizInterface $dailyQuizInterface) {}

    /**
     * Start the quiz by getting the daily quiz for the given theme.
     * @param Request $request The request object
     * @return \Illuminate\View\View
     */
    public function showQuestion(Request $request)
    {
        $themeName = $request->route('theme');
        $quizzes = $this->dailyQuizInterface->getDailyQuiz($themeName);
        return view('daily_quiz.start', ['quizzes' => $quizzes]);
    }
}

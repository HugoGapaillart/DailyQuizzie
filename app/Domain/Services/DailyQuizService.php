<?php

namespace App\Domain\Services;

use App\Domain\Entities\DailyQuiz;
use App\Domain\Repositories\DailyQuizInterface;
use App\Domain\Entities\Theme;
use App\Domain\Entities\Question;
use App\Domain\Entities\Answer;
use App\Domain\Repositories\QuestionRepository;

class DailyQuizService implements DailyQuizInterface
{
    public function __construct(private QuestionRepository $questionRepository) {}

    /**
     * Function to get the five daily quizzes
     * @param string $themeName
     * @return DailyQuiz
     */
    public function getDailyQuiz(string $themeName): DailyQuiz
    {
        // Il nous faut un theme.
        // Récupérer les données (bdd)
        $dailyQuestion = $this->questionRepository->getDailyQuestion($themeName);

        // dd($dailyQuestion->toArray());

        $questions = [];

        // Générer les objets de domaine
        foreach ($dailyQuestion as $item) {
            // Un theme
            $theme = new Theme($themeName);
            // Quatre Réponses
            $answers = [];
            foreach ($item->answers as $answer) {
                $answers[] = new Answer($answer->id, $answer->answer, $answer->is_correct);
            }
            // Une Question
            $questions[] =  new Question($item->question, $item->difficulty, $answers);
        }
        // if (count($questions) < 5) {
        //     throw new \Exception('Not enough questions for the daily quiz');
        // }
        // if (count($questions) > 5) {
        //     $questions = array_slice($questions, 0, 5);
        // }

        // Le quiz
        $quiz = new DailyQuiz($theme, $questions);

        // Renvoyer une réponse au controller
        return $quiz;
    }
}

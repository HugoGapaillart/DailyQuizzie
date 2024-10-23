<?php

namespace App\Domain\Entities;

use App\Domain\Entities\Theme;

class DailyQuiz 
{
    public function __construct(private readonly Theme $theme, private readonly array $questions) {}

    /**
     * Get the theme of the question
     * 
     * @return Theme
     */
    public function getTheme(): Theme
    {
        return $this->theme;
    }

    /**
     * Get the questions.
     * 
     * @return array
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * Get the frist question
     * 
     * @return Question
     */
    public function getSpecifiedQuestion(int $index): Question
    {
        return $this->questions[$index];
    }
}
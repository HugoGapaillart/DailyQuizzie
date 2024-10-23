<?php

namespace App\Domain\Entities;

class Question 
{
    public function __construct(private readonly string $question, private readonly string $difficulty, private readonly array $answers) {}

    /**
     * Get the difficulty of the question
     * 
     * @return string
     */
    public function getDifficulty(): string
    {
        return $this->difficulty;
    }

    /**
     * Get the question.
     * 
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Get the answers.
     * 
     * @return array
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }
} 
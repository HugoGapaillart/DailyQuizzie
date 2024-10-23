<?php 

namespace App\Domain\Entities;

class Answer 
{
    public function __construct(private readonly int $id, private readonly string $answer, private readonly bool $isCorrect) {}

    /**
     * Get the id.
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * Get the answer.
     * 
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }

    /**
     * Get the isCorrect.
     *
     * @return bool
     */
    public function isCorrect()
    {
        return $this->isCorrect;
    }

}
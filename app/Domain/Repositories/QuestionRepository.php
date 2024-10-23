<?php

namespace App\Domain\Repositories;

use Illuminate\Support\Collection;

interface QuestionRepository
{
    public function getDailyQuestion(string $themeName): Collection;
}
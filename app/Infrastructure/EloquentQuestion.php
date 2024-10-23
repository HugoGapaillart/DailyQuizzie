<?php

namespace App\Infrastructure;

use App\Domain\Repositories\QuestionRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\Question;
use App\Models\Theme;
use Carbon\Carbon;

class EloquentQuestion implements QuestionRepository
{
    public function getDailyQuestion($themeName): Collection
    {
        $theme = Theme::where('name', '=', $themeName)->first();
        $dailyQuestion = Question::with(['answers'])
        ->whereDate('created_at', '=', Carbon::now())
        ->where('theme_id', '=', $theme->id)
        ->get();
        return $dailyQuestion;
    }
}
<?php

namespace App\Infrastructure;

use App\Domain\Repositories\ThemeRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class EloquentTheme implements ThemeRepository
{
    public function getThemes(): Collection
    {
        return DB::table('themes')->get();
    }
}
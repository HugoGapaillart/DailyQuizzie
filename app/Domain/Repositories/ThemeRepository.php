<?php

namespace App\Domain\Repositories;

use Illuminate\Support\Collection;

interface ThemeRepository
{
    public function getThemes(): Collection;
}
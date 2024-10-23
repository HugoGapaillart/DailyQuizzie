<?php

namespace App\Domain\Services;

use App\Domain\Repositories\ShowThemeInterface;
use App\Domain\Repositories\ThemeRepository;

class ThemeService implements ShowThemeInterface
{
    /**
     * ThemeService constructor.
     * @param ThemeRepository $themeRepository The injected theme repository
     * @inject App\Domain\Repositories\ThemeRepository
     */
    public function __construct(private ThemeRepository $themeRepository) {}

    /**
     * Get all themes.
     * @return array
     */
    public function getThemes(): array
    {
        $result = [];
        $themes = $this->themeRepository->getThemes();
        foreach($themes as $theme) {
            $result[] = $theme->name;
        }
        return $result;
    }
}
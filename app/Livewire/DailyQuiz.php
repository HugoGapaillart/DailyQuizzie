<?php

namespace App\Livewire;

use Livewire\Component;

class DailyQuiz extends Component
{
    public int $count = 0;

    public $questions = [];

    public string $theme;
    
    public DailyQuizInterface $dailyQuizInterface;

    public function __construct(DailyQuizInterface $dailyQuizInterface)
    {
        $this->dailyQuizInterface = $dailyQuizInterface;
    }

    public function mount($theme)
    {
        $this->theme = $theme;
        $this->questions = $this->dailyQuizInterface->getDailyQuiz($theme);
    }

    public function render()
    {
        return view('livewire.daily-quiz')->layout("layout.app");
    }
}



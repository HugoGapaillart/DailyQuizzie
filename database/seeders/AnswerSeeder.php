<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([
            ['question_id' => 1, 'answer' => 'Séquoia sempervirens', 'is_correct' => true],
            ['question_id' => 1, 'answer' => 'Chêne blanc', 'is_correct' => false],
            ['question_id' => 1, 'answer' => 'Sapin Douglas', 'is_correct' => false],
            ['question_id' => 1, 'answer' => 'Baobab', 'is_correct' => false],
            ['question_id' => 2, 'answer' => '500 ans', 'is_correct' => true],
            ['question_id' => 2, 'answer' => '100 ans', 'is_correct' => false],
            ['question_id' => 2, 'answer' => '50 ans', 'is_correct' => false],
            ['question_id' => 2, 'answer' => '1000 ans', 'is_correct' => false],
            ['question_id' => 3, 'answer' => '5', 'is_correct' => true],
            ['question_id' => 3, 'answer' => '3', 'is_correct' => false],
            ['question_id' => 3, 'answer' => '2', 'is_correct' => false],
            ['question_id' => 3, 'answer' => '7', 'is_correct' => false],
            ['question_id' => 4, 'answer' => 'Océan Pacifique', 'is_correct' => true],
            ['question_id' => 4, 'answer' => 'Océan Atlantique', 'is_correct' => false],
            ['question_id' => 4, 'answer' => 'Océan Indien', 'is_correct' => false],
            ['question_id' => 4, 'answer' => 'Océan Arctique', 'is_correct' => false],
            ['question_id' => 5, 'answer' => '390 km/h', 'is_correct' => true],
            ['question_id' => 5, 'answer' => '120 km/h', 'is_correct' => false],
            ['question_id' => 5, 'answer' => '180 km/h', 'is_correct' => false],
            ['question_id' => 5, 'answer' => '250 km/h', 'is_correct' => false],
        ]);
    }
}

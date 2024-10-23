<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            ['theme_id' => 1, 'question' => 'Quel est l\'arbre le plus haut du monde ?', 'difficulty' => 'difficile', 'created_at' => Carbon::now()],
            ['theme_id' => 1, 'question' => 'Quelle est la durée de vie moyenne d\'un chêne ?', 'difficulty' => 'moyenne', 'created_at' => Carbon::now()],
            ['theme_id' => 1, 'question' => 'Combien de continents ont des déserts ?', 'difficulty' => 'facile', 'created_at' => Carbon::now()],
            ['theme_id' => 1, 'question' => 'Quel est le plus grand océan de la planète ?', 'difficulty' => 'facile', 'created_at' => Carbon::now()],
            ['theme_id' => 1, 'question' => 'Quelle est la vitesse maximale qu\'un faucon pèlerin peut atteindre en piqué ?', 'difficulty' => 'difficile', 'created_at' => Carbon::now()],
        ]);
    }
}

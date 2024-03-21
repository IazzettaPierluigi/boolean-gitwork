<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Movie::create([
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'regista' => $faker->name,
                'data' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'genere' => $faker->randomElement($array = array('Azione', 'Commedia', 'Drammatico', 'Horror', 'Fantascienza')),
                'descrizione' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
            ]);
        }
    }
}

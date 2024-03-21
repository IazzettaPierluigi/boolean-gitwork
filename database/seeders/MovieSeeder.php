<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $faker = Movie::create();

        foreach (range(1, 20) as $index) {
            Movie::create('movies')->insert([
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'regista' => $faker->name,
                'data' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'genere' => $faker->randomElement($array = array('Azione', 'Commedia', 'Drammatico', 'Horror', 'Fantascienza')),
                'descrizione' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
            ]);
        }
    }
}

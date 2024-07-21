<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <24 ; $i++) {
            $train = new Train();
            $train->azienda = $faker->words(1);
            $train->stazione_di_partenza = $faker->words(1);
            $train->stazione_di_arrivo = $faker->words(1);
            $train->orario_di_partenza = $faker->dateTimeThisYear();
            $train->orario_di_arrivo = $faker->dateTimeThisYear();
            $train->codice_treno = $faker->unique()->randomNumber(5, true);
            $train->codice_treno = $faker->randomNumber(2, false);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
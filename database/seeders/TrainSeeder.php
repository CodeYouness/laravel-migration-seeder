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
            $train->azienda = $faker->word;
            $train->stazione_di_partenza = $faker->word;
            $train->stazione_di_arrivo = $faker->word;
            $train->orario_di_partenza = $faker->dateTimeThisMonth();
            $train->orario_di_arrivo = $faker->dateTimeThisYear();
            $train->codice_treno = $faker->numberBetween(1,127);
            $train->numero_carrozze = $faker->numberBetween(1,10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
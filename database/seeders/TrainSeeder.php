<?php

namespace Database\Seeders;

use App\Models\Train;
// use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('it_IT');
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            // $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-1 day', '+3 day');
            $new_train->orario_di_arrivo = $faker->dateTimeInInterval($new_train->orario_di_partenza, '+10 hours');
            $new_train->codice_treno = $faker->bothify('####');
            $new_train->numero_carrozze = $faker->numberBetween(1, 11);
            $new_train->in_orario = $faker->randomElement(['si', 'no']);
            $new_train->cancellato = $faker->randomElement(['si', 'no']);

            $new_train->save();
        }
    }
}

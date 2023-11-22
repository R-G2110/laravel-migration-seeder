<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){

            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Freccia Rossa', 'Freccia Argento']);
            $train->departure_station = $faker->randomElement(['Roma', 'Milano', 'Napoli', 'Bologna', 'Firenze', 'Venezia', 'Trentino']);
            $train->arrival_station = $faker->randomElement(['Roma', 'Milano','Napoli', 'Bologna', 'Firenze', 'Venezia', 'Trentino']);
            $train->departure_time = '2022-11-23 10:00:00';
            $train->arrival_time = '2022-11-23 12:00:00';
            $train->train_code = $faker->regexify('[A-Z]{2}[0-9]{3}');
            $train->wagons = $faker->numberBetween(1, 10);
            $train->cancelled = $faker->numberBetween(0, 1);
            if ($train->cancelled) {
                $train->in_time = 0;
            } else {
                $train->in_time = 1;
            }
            $train->save();
        }
    }
}

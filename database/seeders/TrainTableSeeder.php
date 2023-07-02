<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->sentence(3);
            $newTrain->arrival_station = $faker->sentence(3);
            $newTrain->departure_time = $faker->time();
            $newTrain->	arrival_time = $faker->time();
            $newTrain->train_codes = $faker->bothify('??####??');
            $newTrain->train_wagon = $faker->randomNumber(2, false);
            $newTrain->save();
        }
    }
}

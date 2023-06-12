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
        for ($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->time('H:i:s');
            $newTrain->arrival_time = $faker->time('H:i:s');
            $newTrain->train_code = $faker->unique()->randomNumber(4);
            $newTrain->number_of_coaches = $faker->numberBetween(1, 10);
            $newTrain->on_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;

        }
    }
}

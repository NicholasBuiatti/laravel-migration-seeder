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
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 15; $i++) {

            $newTrain = new Train();
            $newTrain->Company = $faker->company();
            $newTrain->Departure_station = $faker->city();
            $newTrain->Arrival_station = $faker->city();
            $newTrain->Departure_time = $faker->time();
            $newTrain->Arrival_time = $faker->time();
            $newTrain->Train_code = $faker->regexify('[A-Z]{2}[0-9]{5}');
            $newTrain->Number_of_carriages = $faker->randomDigit();
            $newTrain->On_time = $faker->boolean();
            $newTrain->Cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}

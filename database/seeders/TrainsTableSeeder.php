<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->Company = "Trenitalia";
        $newTrain->Departure_station = "Udine";
        $newTrain->Arrival_station = "Trieste";
        $newTrain->Departure_time = "16:00:00";
        $newTrain->Arrival_time = "19:00:00";
        $newTrain->Train_code = "A87SD53";
        $newTrain->Number_of_carriages = 7;
        $newTrain->On_time = true;
        $newTrain->Cancelled = false;
        $newTrain->save();
    }
}

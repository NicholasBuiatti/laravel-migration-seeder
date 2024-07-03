<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//COPIAINCOLLATO DA VEDERE
use Illuminate\Support\Facades\DB;

class ClearTrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->truncate();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for( $i=0; $i<20; $i++ ){

            $new_Train = new Train();
            
            $new_Train->agency = $faker->words(1, true);
            $new_Train->leaving_station = $faker->city();
            $new_Train->arrival_station = $faker->city();
            $new_Train->leaving_at = $faker->words(1, true);
            $new_Train->arrival_at = $faker->words(1, true);
            $new_Train->train_number = $faker->words(1, true);
            $new_Train->number_of_wagon = $faker->words(1, true);
            $new_Train->on_time = $faker->boolean();
            $new_Train->deleted = $faker->boolean();
            $new_Train->brand = $faker->words(1, true);

            $new_Train->save();
        };
    }
}

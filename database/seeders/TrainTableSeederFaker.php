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

            $new_train = new Train();
            
            $new_train->agency = $faker->words(1, true);
            $new_train->leaving_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->leaving_at = $faker->time();
            $new_train->arrival_at = $faker->time();
            $new_train->train_number = $faker->numerify('######');
            $new_train->number_of_wagon = $faker->numerify('##');
            $new_train->on_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            
            $new_train->save();
        };
    }
}

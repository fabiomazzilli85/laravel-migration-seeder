<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
        public function run(Faker $faker): void
    {

        for ($i = 0; $i < 150; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTime(); 
            $new_train->arrival_time = $faker->dateTime();   
            $new_train->train_code = $faker->randomNumber(5, true);
            $new_train->carriages_number = $faker->numberBetween(1, 11);
            $new_train->punctual = $faker->boolean();
            $new_train->deleted = $faker->boolean();

            // salviamo i dati con il metodo save()
            $new_train->save();
        }
    }
}
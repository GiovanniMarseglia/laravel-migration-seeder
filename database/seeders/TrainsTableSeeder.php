<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Faker $faker){
        for($i = 0; $i < 10; $i++){
            $newTrain= new train();
            $newTrain->Azienda = $faker->word;
            $newTrain->Stazione_di_Partenza = $faker->city;
            $newTrain->Stazione_di_Arrivo = $faker->city;
            $newTrain->Orario_di_Partenza = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->Orario_di_Arrivo = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->Codice_Treno = $faker->text($maxNbChars=10);
            $newTrain->Numero_Carrozze = $faker->text($maxNbChars=10);
            $newTrain->In_orario = $faker->boolean;
            $newTrain->Cancellato = $faker->boolean;
            $newTrain->save();
        }
    }
}

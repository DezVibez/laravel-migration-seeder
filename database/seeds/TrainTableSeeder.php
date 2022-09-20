<?php


use App\Train;
use Illuminate\Database\Seeder;
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

        for ($i = 0; $i < 10; $i++) {

    
            $new_train = new Train();

            $new_train->Azienda = $faker->word();
            $new_train->Stazione_di_partenza = $faker->city();
            $new_train->Stazione_di_arrivo = $faker->city();
            $new_train->Orario_di_partenza = $faker->dateTime();
            $new_train->Orario_di_arrivo = $faker->dateTime();
            $new_train->Codice_Treno = $faker->postcode();
            $new_train->Numero_Carrozze = $faker->numberBetween(0, 100);
            $new_train->In_orario = $faker->boolean();
            $new_train->Cancellato = $faker->boolean();

    
            
    
            $new_train->save();


        }


    }
}

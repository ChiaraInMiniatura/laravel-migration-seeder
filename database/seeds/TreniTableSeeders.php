<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TreniTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
        // $Treni = ['trenoAzienda'];
        // foreach ($treno as $treno) {
        //     $newTreno = new Train();
        //     $newTreno->Azienda = $Treni['trenoAzienda'];
        //     $newTreno->save();
        // }
    // }
        public function run(Faker $faker)
        {
            for($i = 0; $i < 10; $i++){
                $new_train = new Train();
                $new_train->Azienda = $faker->name();
                $new_train->save();
            }
        }
    }


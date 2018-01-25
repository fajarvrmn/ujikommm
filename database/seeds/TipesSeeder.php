<?php

use Illuminate\Database\Seeder;
use App\Tipeee;

class TipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = new Tipeee();
        $t1->namatipe = "Sedan";
        $t1->save();

        $t2 = new Tipeee();
        $t2->namatipe = "Hatchback";
        $t2->save();

        $t3 = new Tipeee();
        $t3->namatipe = "LGCV";
        $t3->save();

        $t4 = new Tipeee();
        $t4->namatipe = "SUV";
        $t4->save();

        $t5 = new Tipeee();
        $t5->namatipe = "MPV";
        $t5->save();

         $t6 = new Tipeee();
        $t6->namatipe = "Low MPV";
        $t6->save();

           $ts6 = new Tipeee();
        $ts6->namatipe = "lainnya";
        $ts6->save();


        
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Merekkk;

class MerekkkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $t1 = new Merekkk();
        $t1->merek = "Toyota";
        $t1->save();

        $t2 = new Merekkk();
        $t2->merek = "Honda";
        $t2->save();

        $t3 = new Merekkk();
        $t3->merek = "Suzuki";
        $t3->save();

        $t4 = new Merekkk();
        $t4->merek = "Daihatsu";
        $t4->save();

        $t5 = new Merekkk();
        $t5->merek = "Mitsubishi";
        $t5->save();

         $t6 = new Merekkk();
        $t6->merek = "Nissan";
        $t6->save();

         $t7 = new Merekkk();
        $t7->merek = "Mazda";
        $t7->save();

         $t8 = new Merekkk();
        $t8->merek = "Mercedes-Benz";
        $t8->save();

         $t9 = new Merekkk();
        $t9->merek = "BMW";
        $t9->save();

         $t10 = new Merekkk();
        $t10->merek = "Hyundai";
        $t10->save();

        
    }
}

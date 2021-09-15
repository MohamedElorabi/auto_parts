<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = \App\Region::create([
            'region_name' => 'الرياض'
           
        ]);

        $region = \App\Region::create([
            'region_name' => 'مكة'
           
        ]);

        $region = \App\Region::create([
            'region_name' => 'المدينة المنورة'
           
        ]);

        $region = \App\Region::create([
            'region_name' => 'المنطقة الشرقية'
           
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class Company_sectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_sector = \App\Company_sector_specialist::create([
            'name' => 'هيونداى'
           
        ]);

        $company_sector = \App\Company_sector_specialist::create([
            'name' => 'نيسان'
           
        ]);

        $company_sector = \App\Company_sector_specialist::create([
            'name' => 'تويوتا'
           
        ]);

        $company_sector = \App\Company_sector_specialist::create([
            'name' => 'لانسر'
           
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([Activity_typesSeeder::class]);
        $this->call([AdminSeeder::class]);
        $this->call([Company_sectorSeeder::class]);
        $this->call([RegionSeeder::class]);
        $this->call([SettingSeeder::class]);
    }
}

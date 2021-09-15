<?php

use Illuminate\Database\Seeder;

class Activity_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity_type = \App\Activity_type::create([
            'name' => 'قطع غيار جديدة',
           
        ]);

        $activity_type = \App\Activity_type::create([
            'name' => 'قطع غيار تشليح'
           
        ]);

        $activity_type = \App\Activity_type::create([
            'name' => 'إطارات'
           
        ]);

        $activity_type = \App\Activity_type::create([
            'name' => 'العناية بالسيارات'
           
        ]);

        $activity_type = \App\Activity_type::create([
            'name' => 'زيوت'
           
        ]);
    }
}

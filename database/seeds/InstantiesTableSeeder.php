<?php

use Illuminate\Database\Seeder;

class InstantiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instanties')->insert([
            'Voornaam' => 'Rob',
            'Achternaam' => 'Hendrikx',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D0026CA7CFD',
            'Checkedin' => '0',
        ]);

        DB::table('instanties')->insert([
            'Voornaam' => 'Steven',
            'Achternaam' => 'van der Meijden',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D0226CA8CZD',
            'Checkedin' => '0',
        ]);
    }
}

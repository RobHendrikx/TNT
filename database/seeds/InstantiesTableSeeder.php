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
            'fk_company' => 1,
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
            'fk_company' => 1,
            'Checkedin' => '0',
        ]);

        DB::table('instanties')->insert([
            'Voornaam' => 'Justin',
            'Achternaam' => 'Zwolle',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D0336CA8CZD',
            'fk_company' => 2,
            'Checkedin' => '0',
        ]);

        DB::table('instanties')->insert([
            'Voornaam' => 'Anne',
            'Achternaam' => 'Schuts',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D0226CB8CZD',
            'fk_company' => 2,
            'Checkedin' => '0',
        ]);

        DB::table('instanties')->insert([
            'Voornaam' => 'Jacob',
            'Achternaam' => 'Dubbel',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D1226CA7CZD',
            'fk_company' => 3,
            'Checkedin' => '0',
        ]);

        DB::table('instanties')->insert([
            'Voornaam' => 'Micheliondowits',
            'Achternaam' => 'van Polandiamakliosovits',
            'CheckIn' => '2016-09-07 11:06:30',
            'CheckOut' => '2016-09-07 11:06:30',
            'Student' => '1',
            'TotalTime' => '00:00:00',
            'Rfid' => '6D1226CB7FZD',
            'Checkedin' => '0',
        ]);
    }
}

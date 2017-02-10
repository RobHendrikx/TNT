<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'name' => 'admin',
            'signup_code' => 'ROC'
        ]);
        DB::table('codes')->insert([
            'name' => 'bedrijf',
            'signup_code' => 'TNT'
        ]);
    }
}

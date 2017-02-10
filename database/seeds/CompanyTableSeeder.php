<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            'name' => 'McDonalds',
            'starttime' => date('H:i:s'),
            'email' => 'McDonalds@gmail.com',
        ]);
        DB::table('company')->insert([
            'name' => 'Coca Cola',
            'starttime' => date('H:i:s'),
            'email' => 'CocaCola@gmail.com',
        ]);
        DB::table('company')->insert([
            'name' => 'Mercedes',
            'starttime' => date('H:i:s'),
            'email' => 'Mercedes@gmail.com',
        ]);
        DB::table('company')->insert([
            'name' => 'Microsoft',
            'starttime' => date('H:i:s'),
            'email' => 'Microsoft@gmail.com',
        ]);
    }
}

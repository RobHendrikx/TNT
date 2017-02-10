<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Users;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create(array(
            'username' => 'rob',
            'password' => bcrypt('rob123'),
            'email' => str_random(10) . '@gmail.com',
            'isAdmin' => 1
        ));
        Users::create(array(
            'username' => 'mc',
            'password' => bcrypt('rob123'),
            'email' => str_random(10) . '@gmail.com',
            'fk_company' => 1,
            'isAdmin' => 0
        ));
        Users::create(array(
            'username' => 'cc',
            'password' => bcrypt('rob123'),
            'email' => str_random(10) . '@gmail.com',
            'fk_company' => 2,
            'isAdmin' => 0
        ));
        Users::create(array(
            'username' => 'merc',
            'password' => bcrypt('rob123'),
            'email' => str_random(10) . '@gmail.com',
            'fk_company' => 3,
            'isAdmin' => 0
        ));
        Users::create(array(
            'username' => 'micro',
            'password' => bcrypt('rob123'),
            'email' => str_random(10) . '@gmail.com',
            'fk_company' => 4,
            'isAdmin' => 0
        ));
    }
}

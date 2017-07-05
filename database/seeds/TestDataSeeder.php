<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name'  =>  'Gladys Cerro',
            'email' =>  'gladys.bta@gmail.com',
            'rol'   =>  'admin',
            'password'  =>  bcrypt('123123'),
        ]);

        DB::table('users')->insert([
            'name'  =>  'Claudia Caillaux',
            'email' =>  'claudiacaillaux.sanleonardo@gmail.com',
            'rol'   =>  'admin',
            'password'  =>  bcrypt('123123'),
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Krzysztof';
        $user->password = bcrypt('123qwe');
        $user->email = 'urzytkownik1@gmail.com';
        $user->save();

        $user = new \App\User();
        $user->name = 'Dominik';
        $user->password = bcrypt('123qwe');
        $user->email = 'urzytkownik2@gmail.com';
        $user->save();
    }
}

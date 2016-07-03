<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'Malene Lykke Hansen';
        $user->email = 'mlh@zenteo.dk';
        $user->phone = 42373991;
        $user->password = \Hash::make('Malene87s');
        $user->status = 1;
        $user->save();
    }
}

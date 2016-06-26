<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pt = new App\Contact(); 
        $pt->name = 'Marc Hvenegaard';
        $pt->email = 'mvh@zenteo.dk';
        $pt->phone = '28438489';
        $pt->user_id = 1; 
        $pt->status = 1; 
        $pt->save(); 

        $pt = new App\Contact(); 
        $pt->name = 'Kasper Franz';
        $pt->email = 'kaf@zenteo.dk';
        $pt->phone = '21963308';
        $pt->user_id = 1; 
        $pt->status = 1; 
        $pt->save(); 
    }
}

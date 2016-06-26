<?php

use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pt = new App\ProjectType(); 
        $pt->name = 'Laravel';
        $pt->status = 1; 
        $pt->user_id = 1; 

        $pt->save(); 

        $pt = new App\ProjectType(); 
        $pt->name = 'Cyberbooking V1';
        $pt->status = 1; 
        $pt->user_id = 1; 
        $pt->save();

        $pt = new App\ProjectType(); 
        $pt->name = 'Cyberbooking V2';
        $pt->status = 1; 
        $pt->user_id = 1; 
        $pt->save(); 

        $pt = new App\ProjectType(); 
        $pt->name = 'API Integration';
        $pt->status = 1; 
        $pt->user_id = 1; 
        $pt->save(); 

        $pt = new App\ProjectType(); 
        $pt->name = 'Cyberbooking V1';
        $pt->status = 1; 
        $pt->user_id = 1; 
        $pt->save();
    }
}

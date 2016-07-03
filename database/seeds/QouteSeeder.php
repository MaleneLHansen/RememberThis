<?php

use Illuminate\Database\Seeder;

class QouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $q = new \App\Qoute();
        $q->user_id = 1;
        $q->text = "I am not special. <br>I'm just a limited edition";
        $q->type = 'warning';
        $q->save();
        $q = new \App\Qoute();
        $q->user_id = 1;
        $q->type = 'success';
        $q->text = "Learn from yesterday<br> live to for today<br>Hope for tomorrow";
        $q->save();
        $q = new \App\Qoute();
        $q->user_id = 1;
        $q->type = 'info';
        $q->text = "Every day is a second chance";
        $q->save();
        $q = new \App\Qoute();
        $q->user_id = 1;
        $q->type = 'danger';
        $q->text = "Don't be afraid to fail.<br> Be afraid not to try";
        $q->save();
        $q = new \App\Qoute();
        $q->type = 'success';
        $q->user_id = 1;
        $q->text = "People are not mirrors<br> they see you completely different than the way you see yourself";
        $q->save();
        $q = new \App\Qoute();
        $q->type = 'info';
        $q->user_id = 1;
        $q->text = "If you want to make your dreams come true<br> The first thing to do is wake up";
        $q->save();
        $q = new \App\Qoute();
        $q->user_id = 1;
        $q->type = 'primary';
        $q->text = "Stop holding on to what hurts and make room for what feels good";
        $q->save();
    }
}

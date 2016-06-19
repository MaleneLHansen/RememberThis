<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('task_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('note');
    }
}

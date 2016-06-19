<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->boolean('completed')->default(0);
            $table->integer('order');
            $table->boolean('reminded')->default(0);
            $table->datetime('remindDate');
            $table->boolean('remind');
            $table->integer('user_id')->unsigned();
            $table->integer('tasktype_id')->unsigned();
            $table->integer('project_id')->unsigned();
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
        Schema::drop('task');
    }
}

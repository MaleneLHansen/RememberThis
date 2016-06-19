<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->datetime('beginDate');
            $table->integer('user_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->integer('projecttype_id')->unsigned();
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project');
    }
}

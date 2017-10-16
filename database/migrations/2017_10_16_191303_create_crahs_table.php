<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrahsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('crahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weather');
            $table->string('managerCrah');
            $table->string('posteCrah');
            $table->longText('tasksReal');
            $table->longText('tasksToMake');
            $table->longText('problem');
            $table->longText('solutionProblem');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('crahs', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('crahs');
    }

}

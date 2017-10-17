<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeCrahIdToCrahs extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('crahs', function($table) {
            $table->integer('typeCrah_id')->unsigned();
            $table->foreign('typeCrah_id')->references('id')->on('typeCrahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('crahs', function($table) {
            $table->dropColumn('typeCrah_id');
        });
    }

}

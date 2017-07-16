<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('soviet_id')->unsigned();
            $table->integer('session_type')->unsigned();
            $table->date('date');
            $table->timestamps();

            $table->foreign('soviet_id')->references('id')->on('soviets')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('session_type')->references('id')->on('session_types')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropForeign(['session_type']);
            $table->dropForeign(['soviet_id']);
        });
        Schema::dropIfExists('sessions');
    }
}

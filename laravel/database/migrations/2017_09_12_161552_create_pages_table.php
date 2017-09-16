<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title', 100);
          $table->string('url', 100);
          $table->longText('body');
          $table->timestamps();
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      Schema::dropIfExists('pages');
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

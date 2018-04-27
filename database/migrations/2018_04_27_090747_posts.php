<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
       Schema::create('posts', function (Blueprint $posts) {
            $posts->increments('id');
            $posts->string('title', 255);
            $posts->unsignedInteger('user_id');
            $posts->text('text');
            $posts->date('date');
            $posts->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('posts');
    }
}

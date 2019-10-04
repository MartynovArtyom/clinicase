<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->boolean('accept_image')->default(true);
            $table->integer('image_type')->default(0);
            $table->text('image')->nullable();
            $table->integer('autor_id')->unsigned()->nullable();
            $table->integer('specialty_id')->unsigned()->nullable();
            $table->integer('anatomy_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('posts', function($table) {
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('specialty_id')->references('id')->on('specialty')->onDelete('cascade');
            $table->foreign('anatomy_id')->references('id')->on('anatomy')->onDelete('cascade');
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

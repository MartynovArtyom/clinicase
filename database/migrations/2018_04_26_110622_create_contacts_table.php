<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('custom_name_user');
            $table->integer('user_owner_id')->unsigned()->nullable();
            $table->integer('contact_user_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('contacts', function($table) {
            $table->foreign('user_owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('contact_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id')->unique();
            $table->string('mobile_cn', 11)->unique();
            $table->string('mobile_kr', 11)->unique();
            $table->string('name_zh', 8)->unique();
            $table->string('name_ko', 8)->unique();
            $table->string('name_en', 16)->unique();
            $table->enum('gender', ['secret', 'male', 'female'])->default('secret');
            $table->string('about_me', 200);
            $table->timestamps();
            $table->primary('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}

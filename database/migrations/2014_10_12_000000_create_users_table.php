<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('first_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cover_image')->nullable();
            $table->integer('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('bio')->nullable();
            $table->text('description')->nullable();
            $table->string('phone', 25)->nullable();
            $table->boolean('email_verified')->default(0);
            $table->string('email_verify_code')->nullable();
            $table->string('email')->unique();
            $table->json('settings')->nullable();
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

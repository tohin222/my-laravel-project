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
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('user_name')->unique();
            $table->string('phone_num')->unique();
            $table->string('email')->unique();
            $table->string('password');

            $table->string('street_adress');
            $table->unsignedInteger('division_id')->comment('division table id');
            $table->unsignedInteger('district_id')->comment('district table id');


            $table->unsignedTinyInteger('status')->default(0)->comment('0==inactive---1==active---2==ban');
            $table->string('ip_adress')->nullable();
            $table->string('avatar')->nullable();
            $table->string('shipping_adress')->nullable();


            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}

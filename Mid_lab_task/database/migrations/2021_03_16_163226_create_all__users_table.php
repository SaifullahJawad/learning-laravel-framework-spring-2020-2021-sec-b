<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all__users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('full_name');
            $table->string('user_name');
            $table->string('email');
            $table->string('password');
            $table->string('city');
            $table->string('country');
            $table->string('phone');
            $table->string('company_name');
            $table->string('user_type');
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
        Schema::dropIfExists('all__users');
    }
}

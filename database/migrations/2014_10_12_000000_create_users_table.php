<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('nic')->nullable();
            $table->double('balance')->nullable();
            $table->string('password');
            $table->string('status')->default('active');
            $table->tinyInteger('is_admin')->default('0');
            $table->nestedSet();
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

        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropNestedSet();
        // });

    }
}

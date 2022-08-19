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
            $table->id('id');
        
            $table->string('first_name')->nullable();
            $table->string('last_name');
       
            $table->string('mobile')->nullable();
            $table->boolean('is_admin')->nullable();
      
         
            $table->boolean('status')->default(1)->comment('0: Unrenewed 1: Active');
            $table->string('work_phone')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_city')-> nullable();
            $table->string('address_state')->nullable();
            $table->string('address_postal_code')->nullable();
            $table->text('description')->nullable();
         
            $table->string('email');
            $table->string('password');
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

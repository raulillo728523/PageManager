<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            $table->string('rol');
            $table->string('password');
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('description',2000)->nullable();
            $table->string('service1',1500)->nullable();
            $table->string('service2',1500)->nullable();
            $table->string('service3',1500)->nullable();
            $table->string('service4',1500)->nullable();
            $table->string('service5',1500)->nullable();
            $table->string('service6',1500)->nullable();
            $table->string('history',1500)->nullable();
            $table->string('img')->nullable();
            $table->string('type')->nullable();
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
};

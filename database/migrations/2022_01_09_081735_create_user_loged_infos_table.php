<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogedInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loged_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->on('users')->onDelete('cascade');
            
            $table->date('login_date');
            $table->time('login_time', $precision = 0);
            
            $table->date('logout_date');
            $table->time('logout_time', $precision = 0);
            
            $table->integer('login_duration')->nullable();

            $table->ipAddress('ip_address')->nullable();
            $table->macAddress('device')->nullable();

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
        Schema::dropIfExists('user_loged_infos');
    }
}

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
            $table->id();
            // $table->integer('employee_id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->integer('wrong_attempt')->nullable();
            $table->tinyInteger('is_login_active')->default(1)->comment('1=>Active,0=>NotActive');
            
            $table->string('password');
            
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign("employee_id")->references("id")->on("employee_masters")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}

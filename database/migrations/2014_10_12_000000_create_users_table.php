<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // SQL : create table users (....)
        // table name: plural
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //'id' int(11) auto_increment PK -> uuid
            $table->string('name'); // 'name' varchar(255)
            $table->string('email')->unique(); // 'email' varchar(255) UNIQUE
            $table->timestamp('email_verified_at')->nullable(); // 'email_verified_at' datetime NULL
            $table->string('password'); // 'password' varchar(60)
            $table->rememberToken(); // 'remember_token' varchar(..)
            $table->timestamps(); // 'created_at' timestamp default(now)
                                    // 'updated_at' timestamp default(now)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // SQL : drop (if exists) table users
        Schema::dropIfExists('users');
    }
};

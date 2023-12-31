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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 39);
            $table->string('firstname', 39);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 10);
            $table->unsignedBigInteger('idConcession');
            $table->foreign('idConcession')->references('id')->on('concessions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('idRole');
            $table->foreign('idRole')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

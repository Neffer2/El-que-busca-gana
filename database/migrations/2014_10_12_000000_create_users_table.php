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
            $table->string('name');
            $table->string('gpid');
            $table->string('cedula');
            $table->string('celular')->nullable();
            $table->string('email')->unique();
            $table->string('sede')->nullable();
            $table->string('canales')->nullable();
            $table->string('password');
            $table->boolean('terms')->default(false);
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreignId('estado_id')->default(1);
            $table->timestamp('email_verified_at')->nullable();
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

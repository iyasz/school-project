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
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('profil_img', 250)->nullable();
            $table->string('nis', 100)->nullable();
            $table->string('nisn', 100)->nullable();
            $table->string('no_telp', 200)->nullable()->unique();
            $table->string('point', 200)->nullable();
            $table->enum('gender', ['1', '2']);
            $table->date('birthday')->nullable();
            $table->enum('is_hometeacher', ['1', '2'])->nullable();
            $table->enum('is_graduate', ['1', '2'])->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('address')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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

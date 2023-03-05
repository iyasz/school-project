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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable()->after('password')->nullable();
            $table->unsignedBigInteger('classroom_id')->nullable()->after('role_id')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable()->after('classroom_id')->nullable();
            $table->unsignedBigInteger('mapel_id')->nullable()->after('jurusan_id')->nullable();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['mapel_id']);
            $table->dropForeign(['jurusan_id']);
            $table->dropForeign(['classroom_id']);
            $table->dropForeign(['role_id']);

            $table->dropColumn('role_id');
            $table->dropColumn('classroom_id');
            $table->dropColumn('jurusan_id');
            $table->dropColumn('mapel_id'); 
        });
    }
};

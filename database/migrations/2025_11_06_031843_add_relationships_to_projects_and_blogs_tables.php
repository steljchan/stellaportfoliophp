<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom relasi ke tabel projects dan blogs.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'experience_id')) {
                $table->unsignedBigInteger('experience_id')->nullable();
                $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
            }
        });

        Schema::table('blogs', function (Blueprint $table) {
            if (!Schema::hasColumn('blogs', 'project_id')) {
                $table->unsignedBigInteger('project_id')->nullable();
                $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            }
        });
    }


    /**
     * Rollback perubahan (hapus kolom relasi).
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['experience_id']);
            $table->dropColumn('experience_id');
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropColumn('project_id');
        });
    }
};

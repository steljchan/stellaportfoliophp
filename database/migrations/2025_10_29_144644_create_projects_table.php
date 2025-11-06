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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->json('tech')->nullable(); // 🟢 Tambahkan baris ini
            $table->unsignedBigInteger('experience_id')->nullable(); // relasi ke experiences
            $table->timestamps();

            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

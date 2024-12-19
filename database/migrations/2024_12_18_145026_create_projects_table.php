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
            $table->string('title')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('customer')->nullable();
            $table->foreignId('categoryProject_id')->nullable();
            $table->foreign('categoryProject_id')->references('id')->on('category_projects')->onDelete('cascade');
            $table->string('size')->nullable();
            $table->string('location')->nullable();
            $table->string('photo_url')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

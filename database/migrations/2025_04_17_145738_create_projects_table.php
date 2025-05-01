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
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('related_service')->nullable();
            $table->string('image')->nullable(); // main image
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('client')->nullable();
            $table->string('location')->nullable();
            $table->string('published_at')->nullable();
            $table->string('project_image_1')->nullable();
            $table->string('project_image_2')->nullable();
            $table->string('project_image_3')->nullable();
            $table->text('project_summery')->nullable();
            $table->json('tags')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');

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

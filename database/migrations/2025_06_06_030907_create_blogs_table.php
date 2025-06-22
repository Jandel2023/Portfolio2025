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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('author')->nullable(); // Author can be nullable
            $table->string('category')->nullable(); // Category can be nullable
            $table->string('tags')->nullable(); // Tags can be stored as a comma-separated string
            $table->string('featured_image')->nullable(); // Featured image can be nullable
            $table->boolean('is_published')->default(false); // Default to false, meaning not published
            $table->timestamp('published_at')->nullable(); // Nullable, to be set when published
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

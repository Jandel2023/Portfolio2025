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
            $table->string('name'); // Name of the project
            $table->text('description'); // Description of the project
            $table->string('client_name')->nullable(); // Name of the client, nullable
            $table->string('status')->default('ongoing'); // Status of the project, default is 'ongoing'
            $table->date('start_date')->nullable(); // Start date of the project, nullable
            $table->date('end_date')->nullable(); // End date of the project, nullable
            $table->decimal('budget', 10, 2)->nullable(); // Budget for the project, nullable
            $table->string('category')->nullable(); // Category of the project, nullable
            $table->string('image')->nullable(); // Image associated with the project, nullable
            $table->string('manager')->nullable(); // Project manager, nullable
            $table->text('notes')->nullable(); // Additional notes about the project, nullable
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

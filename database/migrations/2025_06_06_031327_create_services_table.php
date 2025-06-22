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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the service
            $table->text('description'); // Description of the service
            $table->decimal('price', 10, 2)->nullable(); // Price of the service, nullable if free
            $table->string('category')->nullable(); // Category of the service, nullable
            $table->string('status')->default('active'); // Status of the service, default is 'active'
            $table->string('image')->nullable(); // Image associated with the service, nullable
            $table->string('provider')->nullable(); // Provider of the service, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

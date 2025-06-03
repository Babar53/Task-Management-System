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
        Schema::create('assigned_projects', function (Blueprint $table) {
            $table->id();

            // Foreign key for project
            $table->foreignId('project_id')
                ->constrained('projects')
                ->onDelete('cascade');  // This will delete assignments if project is deleted

            // Foreign key for user who is assigned the project
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');  // This will delete assignments if user is deleted

            // Foreign key for user who assigned the project
            $table->foreignId('assigned_by')
                ->constrained('users')
                ->onDelete('cascade');  // Or use 'restrict' if you don't want to delete assignments when the assigner is deleted

            $table->text('notes')->nullable();

            // Use timestamp instead of string for assigned_at
            $table->timestamp('assigned_at')->nullable();

            $table->timestamps();

            // Composite unique constraint
            $table->unique(['project_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_projects');
    }
};

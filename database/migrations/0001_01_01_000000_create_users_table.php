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
            $table->id_user();
            $table->string('name');
            $table->string('email');
            $table->foreignId('id_category')->constrained('categories', 'id_category');
            $table->foreignId('id_role')->constrained('roles', 'id_role');
            $table->foreignId('id_budget')->constrained('budget', 'id_budget');
            $table->foreignId('id_submission')->constrained('submissions', 'id_submission');
            $table->foreignId('id_approval')->constrained('approvals', 'id_approval');
            $table->foreignId('id_payment')->constrained('payments', 'id_payment');
            $table->timestamps();
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

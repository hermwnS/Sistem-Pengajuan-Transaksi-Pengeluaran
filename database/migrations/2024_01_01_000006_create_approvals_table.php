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
        Schema::create('approvals', function (Blueprint $table) {
            $table->id('id_approval');
            $table->foreignId('id_submission')->references('id_submission')->on('submissions')->onDelete('cascade');
            $table->foreignId('id_roles')->references('id_roles')->on('roles')->onDelete('cascade');
            $table->string('status');
            $table->text('catatan')->nullable();
            $table->string('approved_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};

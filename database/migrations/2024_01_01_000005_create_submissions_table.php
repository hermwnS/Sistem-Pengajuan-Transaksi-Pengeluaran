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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id('id_submission');
            $table->string('name');
            $table->foreignId('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreignId('id_category')->references('id_category')->on('categories')->onDelete('cascade');
            $table->date('tanggal');
            $table->decimal('nilai_pengajuan', 10, 2);
            $table->text('deskripsi');
            $table->string('lampiran_dokumen')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected', 'waiting SPV', 'waiting manager', 'waiting director','waiting finance', 'paid'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};

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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('id_payment');
            $table->foreignId('id_submission')->references('id_submission')->on('submissions')->onDelete('cascade');
            $table->string('payment_name');
            $table->enum('status_payment', ['pending', 'completed', 'failed'])->default('pending'); 
            $table->date('payment_date')->nullable();
            $table->decimal('payment_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

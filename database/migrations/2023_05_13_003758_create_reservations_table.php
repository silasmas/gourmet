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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('date');
            $table->string('nombre')->nullable();
            $table->string('prix')->nullable();
            $table->string('monaie')->nullable();
            $table->string('reference');
            $table->text('order_number')->nullable();
            $table->string('amount_customer')->nullable();
            $table->string('channel')->nullable();
            $table->foreignId('statut_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

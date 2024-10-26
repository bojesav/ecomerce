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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOndelete();
            $table->string('first_name')->nullabel();
            $table->string('last_name')->nullabel();
            $table->string('phone')->nullabel();
            $table->text('street_address')->nullabel();
            $table->string('city')->nullabel();
            $table->string('state')->nullabel();
            $table->string('zip_code')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

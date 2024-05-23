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
        Schema::create('order__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('order_id')->constrained('orders')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('discount_id')->constrained('discounts')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('price');
            $table->string('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__details');
    }
};

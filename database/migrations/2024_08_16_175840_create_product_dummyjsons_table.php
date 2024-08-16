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
        Schema::create('product_dummyjsons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->float('discountPercentage', 8, 2)->nullable();
            $table->float('rating', 8, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->string('brand')->nullable();
            $table->string('sku')->nullable();
            $table->integer('weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_dummyjsons');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('product_name')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 10, 2)->nullable(); // Use decimal for prices
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

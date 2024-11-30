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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('brand'); // Brand of the product
            $table->string('name'); // Name of the product
            $table->string('image')->nullable(); // URL or path to the product image (nullable)
            $table->integer('quantity'); // Available quantity of the product
            $table->decimal('cost_price', 10, 2); // Cost price of the product
            $table->decimal('sell_price', 10, 2); // Sell price of the product
            $table->text('description'); // Description of the product
            $table->integer('rating')->default(0); // Rating of the product (1-5)
            $table->enum('status', ['active', 'inactive'])->default('active'); // Product status (active or inactive)
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

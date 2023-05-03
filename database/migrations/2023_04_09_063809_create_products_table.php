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
            $table->id();
             $table->string('name')->default(null);
            $table->string('description')->default(null);
            $table->longText('long_description')->default(null);
            $table->decimal('price')->default('00');
            $table->string('stock')->default(null);
            $table->string('reviews')->default(null);
            $table->string('review_user_id')->default(null);
            $table->string('image')->default(null);
            
            $table->decimal('lenght')->default(null);
            $table->decimal('height')->default(null);
            $table->decimal('weight')->default(null);
            $table->decimal('width')->default(null);
            $table->string('category')->default(null);
            $table->string('categoryid')->default(null);
            

            $table->decimal('sellPrice')->default(null);
            $table->decimal('sell%')->default(null);
            $table->string('rating')->default(null);
            $table->string('facebooklink')->default(null);
            $table->string('googlelink')->default(null);
            $table->string('whatsapp')->default(null);
            $table->string('payment_method')->default('cash on delivery');
            $table->string('deliver_method')->default(null);
            $table->timestamps();
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

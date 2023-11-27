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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignBigInteger('order_id');
            $table->unsignBigInteger('medcinine_id');
            $table->integer('quantity');
            $table->double('price');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('medcinine_id')->references('id')->on('medcinines');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

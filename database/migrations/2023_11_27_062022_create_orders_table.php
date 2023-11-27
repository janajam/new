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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignBigInteger('user_id');
            $table->string('order_date');
            $table->integer('total_amount');
            $table->string('status');
            $table->string('payment_status');
            $table->unsignBigInteger('medicine_wherehouse_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('medicine_wherehouse_id')->references('id')->on('medicine_wherehouses');
            
        });
    }

    /*;
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

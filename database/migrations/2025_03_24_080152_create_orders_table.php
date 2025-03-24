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
            $table->string('vocher_no');
            $table->string('price');
            $table->string('qty');
            $table->string('status');
            $table->string('payment_slip');
            $table->text('note');
            $table->foreignId('product_id')
                    ->constrained('products')
                    ->onDelete('cascade');
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onDelete('cascade');
            $table->foreignId('payment_id')
                    ->constrained('payments')
                    ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

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
            $table->string('code_no');
            $table->string('name');
            $table->string('image');
            $table->string('price');
            $table->string('discount');
            $table->string('in_stock');
            $table->text('description');
            //categories ထဲက Data ကို ယူသုံးထားရင် သူလဲပျက်မယ် Primary key ဖျက်ရင် forignet key ပါပျက်မယ်
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->softDeletes();
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

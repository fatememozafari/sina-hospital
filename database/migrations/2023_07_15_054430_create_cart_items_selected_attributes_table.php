<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ویژگی هایی که کاربر همراه با محصولات به سبد خرید خود اضافه میکند
        Schema::create('cart_items_selected_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_item_id')->constrained('cart_items')->onUpdate('cascade')->onDelete('cascade');// مثلا کفش -- پیرهن
            $table->foreignId('category_attribute_id')->constrained('category_attributes')->onUpdate('cascade')->onDelete('cascade'); // سایز-- رنگ
            $table->foreignId('category_value_id')->constrained('category_values')->onUpdate('cascade')->onDelete('cascade'); //43  --  قرمز
            $table->string('value')->nullable(); // چند انتخابی ها
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items_selected_attributes');
    }
};

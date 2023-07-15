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
        Schema::create('category_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('نام ویژگی دسته بندی');
            $table->tinyInteger('type')->default(0)->comment('نوع ویژگی دسته بندی');
            $table->string('unit')->comment('واحد اندازه گیری');
            $table->foreignId('category_id')->constrained('product_categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('category_attributes');
    }
};

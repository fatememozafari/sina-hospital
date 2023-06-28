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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->enum('type',['SPECIALISED','GENERAL','SEMI_SPECIALISED']);
            $table->foreignId('teacher_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('start_at')->format('Y/m/d');
            $table->integer('duration')->nullable();
            $table->string('rate')->nullable();
            $table->enum('status',['active','in-active','soon'])->default('soon');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('courses');
    }
};

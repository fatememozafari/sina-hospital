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
            $table->string('id_code')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->enum('type',['SPECIALISED','GENERAL','SEMI_SPECIALISED']);
            $table->foreignId('teacher_id')->nullable();
            $table->date('start_at');
            $table->string('rate')->nullable();
            $table->string('description');
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

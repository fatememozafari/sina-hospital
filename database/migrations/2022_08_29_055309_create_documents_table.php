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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('user_id')->nullable();

            $table->enum('type',['SPECIALISED','GENERAL','SEMI_SPECIALISED']);
            $table->foreignId('teacher_id')->nullable();
            $table->enum('file_type',['pdf','video','voice']);
            $table->string('rate');
            $table->string('description');
            $table->longText('file');
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
        Schema::dropIfExists('documents');
    }
};

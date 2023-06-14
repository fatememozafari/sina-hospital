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
        Schema::create('offline_courses', function (Blueprint $table) {
            $table->id();
            $table->string('id_code');
            $table->string('title');
            $table->string('slug');
            $table->foreignId('user_id')->constrained();
            $table->enum('type',['SPECIALISED','GENERAL','SEMI_SPECIALISED']);
            $table->foreignId('teacher_id')->nullable()->constrained();
//            $table->enum('file_type',['pdf','video','voice']);
            $table->string('rate');
            $table->date('start_at')->format('Y/m/d');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('offline_courses');
    }
};

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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('unknown')->nullable();
            $table->text('comment')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('commentable_id')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('commentable_type')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->tinyInteger('seen')->default(0)->comment('0 => unseen, 1 => seen');
            $table->tinyInteger('approved')->default(0)->comment('0 => not approved, 1 => approved');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();


//            $table->id();
//            $table->text('body');
//            $table->foreignId('parent_id')->nullable()->constrained('comments');
//            $table->foreignId('author_id')->constrained('users');
//            $table->unsignedBigInteger('commentable_id');
//            $table->string('commentable_type');
//            $table->tinyInteger('seen')->default(0)->comment('0 => unseen, 1 => seen');
//            $table->tinyInteger('approved')->default(0)->comment('0 => not approved, 1 => approved');
//            $table->tinyInteger('status')->default(0);
//            $table->timestamps();
//            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentAspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommentAspirations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aspiration_id');
            $table->foreign('aspiration_id')->references('id')->on('aspirations')->onDelete('cascade');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->text('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CommentAspirations');
    }
}

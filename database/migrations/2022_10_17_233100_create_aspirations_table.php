<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dprd_id');
            $table->foreign('dprd_id')->references('id')->on('dprds')->onDelete('cascade');
            $table->unsignedBigInteger('title_sub_category_id');
            $table->foreign('title_sub_category_id')->references('id')->on('title_sub_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('title');
            $table->text('description');
            $table->string('street');
            $table->string('rt');
            $table->string('rw');
            $table->string('districts');
            $table->string('village');
            $table->string('volume');
            $table->string('unit');
            $table->string('attachment');
            $table->string('status');
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
        Schema::dropIfExists('aspirations');
    }
}

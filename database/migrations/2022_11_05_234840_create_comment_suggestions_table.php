<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_suggestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suggestion_id');
            $table->foreign('suggestion_id')->references('id')->on('suggestions')->onDelete('cascade');
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
        Schema::dropIfExists('comment_suggestions');
    }
}

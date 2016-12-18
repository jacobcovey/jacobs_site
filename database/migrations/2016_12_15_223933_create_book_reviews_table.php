<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_reviews', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('authorFirstName');
          $table->string('authorLastName');
          $table->integer('rating');
          $table->integer('month');
          $table->integer('year');
          $table->string('link');
          $table->string('imgPath');
          $table->longText('review');
          $table->string('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_reviews');
    }
}

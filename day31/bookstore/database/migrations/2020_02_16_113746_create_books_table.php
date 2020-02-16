<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('book_slug');
            $table->text('book_intro');
            $table->text('book_desc');
            $table->string('book_main_image');
            $table->text('book_images');
            $table->string('book_author');
            $table->float('book_price_core');
            $table->float('book_price_sell');
            $table->integer('book_status');
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
        Schema::dropIfExists('books');
    }
}

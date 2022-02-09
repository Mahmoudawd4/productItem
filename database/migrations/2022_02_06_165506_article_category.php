<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticleCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('article_category', function (Blueprint $table) {
            $table->id();
            //two forigen kes : category_id , book_id
            $table->foreignId('category_id')->constrained()->onDelete('cascade');;
            $table->foreignId('article_id')->constrained()->onDelete('cascade');

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
        //
        Schema::dropIfExists('book_category');
    }
}

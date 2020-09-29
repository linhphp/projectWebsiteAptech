<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConectionBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conection_blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('news_categories_id');
            $table->unsignedBigInteger('kind_of_id');
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('news_categories_id')->references('id')->on('news_categories');
            $table->foreign('kind_of_id')->references('id')->on('kind_of_news');
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
        Schema::dropIfExists('conection_blogs');
    }
}

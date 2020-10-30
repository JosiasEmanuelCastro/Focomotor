<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('year');
            $table->string('fuel');
            $table->string('condition');
            $table->double('price');
            $table->bigInteger('kilometers');
            $table->string('feature_image');
            $table->integer('doors')->nullable()->default(0);
            $table->string('description')->nullable();
            $table->integer('type_id')->unsigned();
            $table->json('location')->nullable();
            $table->integer('views')->default(0);
            $table->bigInteger('category_id')->default(0);
            $table->string('title')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('articles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->integer('views')->default(0);
            $table->bigInteger('category_id')->default(0);
            $table->string('title')->nullable();
            $table->string('slug');
            $table->integer('type_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('views');
            $table->dropColumn('category_id');
            $table->dropColumn('title');
            $table->dropColumn('slug');
        });
    }
}

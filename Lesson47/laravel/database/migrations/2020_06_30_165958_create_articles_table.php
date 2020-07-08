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
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('excerpt');
            $table->text('body');
            $table->timestamps();

            $table->foreign('user_id') // in articles table column 'user_id'
                  ->references('id') // users column id
                  ->on('users') // table users
                  ->onDelete('cascade'); // cascade - mysql/mariadb
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

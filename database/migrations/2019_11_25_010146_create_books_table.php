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

            $table->string('title', 250)->unique();
            $table->string('slug', 250)->unique();
            $table->float('price', 8, 2)->unsigned();
            $table->string('published_date', 10)->nullable();
            $table->boolean('publish')->default(0);

            $table->bigInteger('author_id')->unsigned();
            $table->foreign('author_id')
                    ->references('id')
                    ->on('authors')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

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

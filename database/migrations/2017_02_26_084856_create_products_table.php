<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->float('price');
            $table->string('thumbnail', 255);
            $table->integer('category_id');
            $table->integer('discount');
            $table->string('description',255);
            $table->text('content');
            $table->string('author',150);
            $table->dateTime('publishing_date');
            $table->string('publishing_company',255);
            $table->integer('number_of_pages');
            $table->string('size');
            $table->enum('is_deleted',['1','0'])->default('0');
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
        Schema::dropIfExists('products');
    }
}

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
          //Campos de la tabla
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name')->lenght('100');
            $table->string('description');
            $table->decimal('price');
            $table->string('featured_img');
            $table->bigInteger('categoria_id')->unsigned()->nullable();
            //UNSIGNEDBIGINTEGER TAMBIEN PUEDE SER

            $table->foreign('categoria_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
        $table->dropIfExists('products');
        $table->dropForeign('categoria_id');
    });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('image');
            $table->text('description');
            $table->text('trailer')->nullable();
            $table->string('manufacturer');
            $table->string('partNumber');
            $table->string('color');
            $table->string('cpu');
            $table->string('chipset');
            $table->string('ram');
            $table->string('slotram');
            $table->string('maxram');
            $table->string('vga');
            $table->string('hard_disk');
            $table->string('security');
            $table->string('screen');
            $table->string('webcam');
            $table->string('audio');
            $table->string('wireless');
            $table->string('ports');
            $table->string('battery');
            $table->string('size');
            $table->string('weight');
            $table->string('operating_system');
            $table->string('accessory');
            $table->string('status');
            $table->string('price_old');
            $table->string('price_new');
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
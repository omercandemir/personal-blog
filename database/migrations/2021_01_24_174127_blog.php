<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->longText('yazi');
            $table->string('yazar');
            $table->string('resim');
            $table->unsignedBigInteger('kategori_id'); // ilişkisel bir stün 
            $table->string('slug');
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategoriler'); // kategori_id kesinlikle kategoriler tablosundaki id'de mevcut olmalı
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}

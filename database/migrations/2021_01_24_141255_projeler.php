<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projeler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeler', function (Blueprint $table) {
            $table->id();
            $table->string('proje_adi');
            $table->string('proje_aciklama');
            $table->longText('proje_yazi')->nullable();
            $table->longText('proje_resim');
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
        Schema::dropIfExists('projeler');
    }
}

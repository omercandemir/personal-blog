<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ayar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayar', function (Blueprint $table) {
            $table->id();
            $table->string('site_adi');
            $table->string('site_aciklama')->unique();
            $table->string('hakkimizda');
            $table->longText('ozel_soz');
            $table->string('logo');
            $table->string('logo_dark');
            $table->string('mail');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('analatics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayar');
    }
}

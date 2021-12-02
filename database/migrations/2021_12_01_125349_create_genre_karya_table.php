<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreKaryaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_karya', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karya_id');
            $table->foreign('karya_id')->references('id')->on('karya')->onDelete('cascade');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
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
        Schema::dropIfExists('genre_karya');
    }
}

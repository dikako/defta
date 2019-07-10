<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('data', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increment
            $table->string('provinsi'); //membuat kolom provinsi
            $table->integer('paslon1'); //membuat kolom paslon1
            $table->integer('paslon2'); //membuat kolom paslon2
            $table->integer('jumlah'); //membuat kolom jumlah
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}

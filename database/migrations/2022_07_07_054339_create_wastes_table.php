<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wastes', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('kategori');
            $table->string('jenis_sampah');
            $table->string('produsen_sampah');
            $table->integer('berat_sampah');
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
        Schema::dropIfExists('wastes');
    }
}

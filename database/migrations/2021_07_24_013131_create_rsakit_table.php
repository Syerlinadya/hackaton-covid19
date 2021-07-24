<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsakit', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('alamat',100);
            $table->unsignedBigInteger('kota_id');
            $table->unsignedBigInteger('provinsi_id');
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
        Schema::dropIfExists('rsakit');
    }
}

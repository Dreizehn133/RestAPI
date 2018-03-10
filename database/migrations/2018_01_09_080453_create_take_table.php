<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //pembuatan nama tabel di akhiri s
        Schema::create('takes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('mod_id',10);
            $table->integer('jumlah');
            $table->string('keterangan');
            $table->timestamps();
            $table->foreign('id_user')->references('id_usr')->on('logins')->onDelete('cascade');
            $table->foreign('mod_id')->references('mod_id')->on('moduls');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takes');
    }
}

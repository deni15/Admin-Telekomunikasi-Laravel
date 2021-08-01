<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->string('Costumer');
            $table->string('Jenis_proyect');
            $table->string('email_costumer')->unique();
            $table->char('no_telp', 14)->unique();
            $table->string('alamat_proyect');
            $table->integer('biaya');
            $table->integer('teknisi_id');
            $table->string('lokasi_proyect');
            $table->char('longitude', 100)->unique();
            $table->char('latitude', 100)->unique();
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
        Schema::dropIfExists('proyects');
    }
}

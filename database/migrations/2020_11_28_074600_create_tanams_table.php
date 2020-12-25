<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('padi_id');
            $table->string('kecamatan');
            $table->string('lokasi');
            $table->string('luas_lahan');
            $table->string('jenis_tanah');
            $table->string('jenis_pupuk');
            $table->string('ph_tanah');
            $table->string('kondisi_tanaman');
            $table->enum('status',['belum terjadi','sudah terjadi','catatan salah'])->default('belum terjadi');
            
            $table->timestamps();
            
            $table->foreign('padi_id')
                ->references('id')
                ->on('padi')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanam');
    }
}

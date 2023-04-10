<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplikasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_opd');
            $table->string('nama_aplikasi');
            $table->text('deskripsi');
            $table->enum('prioritas',['Low','Medium','High','Urgent']);
            $table->enum('status_aplikasi',['Disposisi Surat'])->nullable();
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_selesai')->nullable();
            $table->integer('progres')->default(0);
            $table->integer('no_urut')->nullable();
            $table->string('cp');
            $table->string('slug');
            $table->foreign('id_opd')->references('id')->on('data_opds')->onUpdate('cascade');
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
        Schema::dropIfExists('aplikasis');
    }
};

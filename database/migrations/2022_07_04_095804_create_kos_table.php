<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->id();
            $table->integer('kecamatan_id');
            $table->string('nama_kos');
            $table->string('foto_utama');
            $table->text('url_map');
            $table->integer('owner_id');
            $table->bigInteger('harga');
            $table->enum('jenis_sewa', ['harian', 'mingguan', 'bulanan'])->default('bulanan');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('kos');
    }
}

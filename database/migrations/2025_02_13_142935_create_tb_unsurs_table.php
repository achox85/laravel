<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUnsursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_unsurs', function (Blueprint $table) {
            $table->id('no');
            $table->string('code',5);
            $table->string('nama');
            $table->string('atomic_mass');
            $table->string('melting_point')->nullable();
            $table->string('boiling_point')->nullable();
            $table->text('deskripsi');
            $table->text('media')->nullable();
            $table->integer('jenis')->default(0);
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
        Schema::dropIfExists('tb_unsurs');
    }
}

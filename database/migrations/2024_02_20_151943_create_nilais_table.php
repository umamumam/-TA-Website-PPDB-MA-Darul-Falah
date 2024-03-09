<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
			$table->string('nisn');
			$table->string('nama_peserta');
			$table->integer('akidah');
			$table->integer('hadis');
			$table->integer('fikih');
			$table->integer('bhs_arab');
			$table->integer('bhs_inggris');
			$table->integer('bhs_indonesia');
			$table->integer('matematika');
			$table->integer('ipa');
			$table->integer('ips');
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
        Schema::dropIfExists('nilais');
    }
}

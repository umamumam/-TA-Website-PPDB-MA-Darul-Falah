<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('ppdbs', function (Blueprint $table) {
        $table->id();
        $table->string('nisn');
        $table->string('nik_peserta');
        $table->string('nm_peserta');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->default('Laki-laki');
        $table->string('tmpt_lahir');
        $table->date('tgl_lahir');
        $table->integer('anak_ke'); // Menggunakan integer bukan int
        $table->string('no_kk');
        $table->string('nik_ayah');
        $table->string('nama_ayah');
        $table->string('pend_ayah');
        $table->string('pek_ayah');
        $table->string('nik_ibu');
        $table->string('nama_ibu');
        $table->string('pend_ibu');
        $table->string('pek_ibu');
        $table->string('telp_peserta');
        $table->string('telp_ortu');
        $table->string('alamat_peserta');
        $table->string('kode_pos');
        $table->string('asal_sekolah');
        $table->string('npsn');
        $table->string('nsm');
        $table->string('alamat_sekolah');
        $table->enum('kriteria_peserta', ['Siswa Baru', 'Siswa Naik Tingkat'])->default('Siswa Baru');
        $table->enum('peminatan', ['Agama', 'IPA', 'IPS'])->default('Agama');
        $table->string('no_kip');
        $table->string('no_kks');
        $table->string('no_pkh');
        $table->date('tgl_daftar');
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
        Schema::dropIfExists('ppdbs');
    }
}

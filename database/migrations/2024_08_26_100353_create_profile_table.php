<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->text('visi');
            $table->text('misi');  // Mengubah 'misi' menjadi 'deskripsi'
            $table->string('jml_siswa');
            $table->string('jml_guru');
            $table->string('jml_staff');
            $table->string('file');
            $table->text('alamat');
            $table->string('kontak1');
            $table->string('kontak2');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
};

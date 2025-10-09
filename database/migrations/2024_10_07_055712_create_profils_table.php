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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->text('visi');
            $table->text('misi');
            $table->integer('jml_siswa');
            $table->integer('jml_guru');
            $table->integer('jml_staff');
            $table->string('image')->nullable();
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
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};

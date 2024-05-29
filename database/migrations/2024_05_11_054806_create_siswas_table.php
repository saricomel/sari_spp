<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kela_id')->unsigned();
            $table->string('nama_siswa');
            $table->integer('nis');
            $table->enum('jenis_kelamin',['wanita','pria']);
            $table->string('no_telpon');
            $table->string('alamat');
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->dropForeign('siswas_id_kelas_foreign');
        });

        Schema::dropIfExists('siswas');
    }
};
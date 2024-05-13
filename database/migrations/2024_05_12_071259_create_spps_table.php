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
        Schema::create('spps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_siswa')->unsigned();
            $table->integer('bulan');
            $table->integer('tahun');
            $table->double('jumblah_spp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spps', function (Blueprint $table) {
            $table->dropForeign('siswas_id_siswa_foreign');
        });

        Schema::dropIfExists('spps');
    }
};

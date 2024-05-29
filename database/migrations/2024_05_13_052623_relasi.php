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
        //
        Schema::table('siswas', function (Blueprint $table) {
            $table->foreign('kela_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
       });

       Schema::table('pembayarans',function(Blueprint $table){
        $table->foreign('id_user')->references('id')->on('users')
        ->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('id_spp')->references('id')->on('spps')
        ->onUpdate('cascade')->onDelete('cascade');
    });

    Schema::table('spps', function (Blueprint $table) {
        $table->foreign('id_siswa')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
   });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

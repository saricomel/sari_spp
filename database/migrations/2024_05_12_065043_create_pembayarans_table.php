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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_spp')->unsigned();
            $table->date('tanggal_pembayaran');
            $table->double('jumblah_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayarans', function(Blueprint $table) {
            $table->dropForeign('pembayarans_id_user_foreign');
        });

        Schema::table('pembayarans', function(Blueprint $table) {
            $table->dropIndex('pembayarans_id_user_foreign');
        });

        Schema::table('pembayarans', function(Blueprint $table) {
            $table->dropForeign('pembayarans_id_spp_foreign');
        });

        Schema::table('pembayarans', function(Blueprint $table) {
            $table->dropIndex('pembayarans_id_spp_foreign');
        });

        Schema::dropIfExists('pembayarans');
    }
};

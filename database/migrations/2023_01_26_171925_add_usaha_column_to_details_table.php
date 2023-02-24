<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail', function (Blueprint $table) {
            $table->string('produk')->after('nama_usaha');
            $table->unsignedBigInteger('id_sektor')->after('produk');
            $table->foreign('id_sektor')->references('id')->on('sektor')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kec')->after('alamat');
            $table->string('kab')->after('kec');
            $table->string('prov')->after('kab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail', function (Blueprint $table) {
            $table->dropColumn('produk');
            $table->dropForeign(['id_sektor']);
            $table->dropColumn('id_sektor');
            $table->dropColumn('kec');
            $table->dropColumn('kab');
            $table->dropColumn('prov');
        });
    }
};
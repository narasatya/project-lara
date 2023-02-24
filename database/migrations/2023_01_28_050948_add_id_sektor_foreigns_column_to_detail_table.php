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
            $table->unsignedBigInteger('id_sektor')->after('produk');
            $table->foreign('id_sektor')->references('id')->on('sektor')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign(['id_sektor']);
            $table->dropColumn('id_sektor');
        });
    }
};
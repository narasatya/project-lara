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
            $table->string('kab')->after('alamat');
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
            $table->dropColumn('kab');
            $table->dropColumn('prov');
        });
    }
};
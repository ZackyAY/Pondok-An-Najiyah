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
    Schema::table('alumni', function (Blueprint $table) {
        $table->string('nis')->after('id');
        $table->string('nama')->after('nis');
        $table->string('kelas_asal')->after('nama');
        $table->string('foto')->nullable()->after('kelas_asal');
    });
}

public function down()
{
    Schema::table('alumni', function (Blueprint $table) {
        $table->dropColumn(['nis', 'nama', 'kelas_asal', 'foto']);
    });
}

};

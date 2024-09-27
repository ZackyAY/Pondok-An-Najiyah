<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create the 'alumni' table if it doesn't exist
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nis'); 
            $table->string('nama'); 
            $table->string('kelas_asal'); 
            $table->string('foto')->nullable(); 
            $table->year('tahun_lulus'); 
            $table->timestamps(); // Add timestamps if you want created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop the 'alumni' table
        Schema::dropIfExists('alumni');
    }
};

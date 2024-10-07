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
        Schema::create('bibliografi', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('judul');
            $table->string('penulis');
            $table->integer('harga');
            $table->date('perolehan');
            $table->unsignedBigInteger('bibliografi_kategori_id');
            $table->timestamps();
            
            $table->foreign('bibliografi_kategori_id')->references('id')->on('bibliografi_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliografi');
    }
};

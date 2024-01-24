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
        Schema::create('table_buku', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Pengarang');
            $table->string('Penerbit');
            $table->integer('Tahun_Terbit');
            $table->decimal('Harga', 10, 2);
            $table->integer('Jumlah_Stok'); 
            $table->string('Kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_buku');
    }
};

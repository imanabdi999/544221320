<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table= 'table_buku';
    protected $primaryKey='id';
    protected $fillable = ['Judul', 'Pengarang', 'Penerbit', 'Tahun_Terbit', 'Harga', 'Jumlah_Stok', 'Kategori'];
}

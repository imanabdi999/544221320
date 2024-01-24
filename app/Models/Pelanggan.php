<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table= 'table_pelanggan';
    protected $primaryKey='id';
    protected $fillable = ['Nama_Pelanggan', 'Alamat', 'Nomor_Telepon'];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_buku')->insert(array(
                ['Judul'=>'nano nano', 'Pengarang'=>'nige123', 'Penerbit'=>'PT. Erlangga', 'Tahun_Terbit'=>'2010', 'Harga'=>'100000', 'Jumlah_Stok'=>'20', 'Kategori'=>'Novel'],
                ['Judul'=>'the opps', 'Pengarang'=>'camari', 'Penerbit'=>'PT. oblock', 'Tahun_Terbit'=>'2010', 'Harga'=>'200000', 'Jumlah_Stok'=>'10', 'Kategori'=>'Biography']
            )
        );
    }
}

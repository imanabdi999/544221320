<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \db::table('table_pelanggan')->insert(array(
            ['Nama_Pelanggan'=>'iman', 'Alamat'=>'Jl. Rappocini', 'Nomor_Telepon'=>'08123456767'],
            ['Nama_Pelanggan'=>'demarcus', 'Alamat'=>'Jl. Alauddin', 'Nomor_Telepon'=>'08789798721']
        )
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //example database
        DB::table('buku')->insert([[
          'kode_buku' => 'A203',
          'judul_buku' => 'bulan',
          'penulis_buku' => 'tere lieye',
          'penerbit_buku' => 'gramedia',
          'tahun_terbit' => '2015',
        ],
        [
          'kode_buku' => 'A201',
          'judul_buku' => 'bumi',
          'penulis_buku' => 'tere lieye',
          'penerbit_buku' => 'gramedia',
          'tahun_terbit' => '201',
        ],         
      ]);
    }
}

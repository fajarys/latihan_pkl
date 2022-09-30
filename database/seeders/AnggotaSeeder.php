<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('anggota')->insert([
      [
        'id_anggota' => '2212',
        'kode_anggota' => 'B212',
        'nama_anggota' => 'anggita',
        'jk' => 'P',
        'no_tlp' => '0999888762',
        'jurusan_anggota' => 'RPL',
        'alamat' => 'Bantul',
      ],
      [
        'id_anggota' => '2213',
        'kode_anggota' => 'B213',
        'nama_anggota' => 'fajar',
        'jk' => 'L',
        'no_tlp' => '0359888762',
        'jurusan_anggota' => 'RPL',
        'alamat' => 'Sewon',
      ],
    ]);
  }
}

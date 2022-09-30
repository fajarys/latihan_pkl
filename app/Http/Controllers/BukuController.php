<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{

  public function data()
  {
    $buku = DB::table('buku')->orderBy('kode_buku')->get();
    // dd($buku);
    // return view('buku.data', ['buku' => $buku] );
    // return view('buku.data', compact('buku'));
    return view('buku.data')->with('buku', $buku);
  }

  public function add()
  {
    return view('buku.add');
  }

  public function addProses(Request $request)
  {
    // return $request;
    DB::table('buku')->insert([
      'kode_buku' => $request->kode_buku,
      'judul_buku' => $request->judul_buku,
      'penulis_buku' => $request->penulis_buku,
      'penerbit_buku' => $request->penerbit_buku,
      'tahun_terbit' => $request->tahun_terbit
    ]);
    return redirect('bukus')->with('status', 'Data Buku berhasil ditambah!');
  }
  public function edit($id)
  {
    $buku = DB::table('buku')->where('id_buku', $id)->first();
    return view('buku.edit', compact('buku'));
    // dd($buku);
  }
  public function editProses(Request $request, $id)
  {
    DB::table('buku')->where('id_buku', $id)
      ->update([
        'kode_buku' => $request->kode_buku,
        'judul_buku' => $request->judul_buku,
        'penulis_buku' => $request->penulis_buku,
        'penerbit_buku' => $request->penerbit_buku,
        'tahun_terbit' => $request->tahun_terbit
      ]);
    return redirect('bukus')->with('status', 'Data Buku berhasil diubah!');
  }
  public function delete($id)
  {
    DB::table('buku')->where('id_buku', $id)->delete();
    return redirect('bukus')->with('status', 'Data Buku berhasil dihapus!');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
  public function data()
  {
    $anggota = DB::table('anggota')->orderBy('id_anggota')->get();
    return view('anggota.data')->with('anggota', $anggota);
  }
  public function add()
  {
    return view('anggota.add');
  }
  public function prosesAdd(Request $request)
  {
    DB::table('anggota')->insert([
      'id_anggota' => $request->id_anggota,
      'kode_anggota' => $request->kode_anggota,
      'nama_anggota' => $request->nama_anggota,
      'jk' => $request->jk,
      'jurusan_anggota' => $request->jurusan_anggota,
      'no_tlp' => $request->no_tlp,
      'alamat' => $request->alamat
    ]);
    return redirect('anggotas')->with('status', 'Data Anggota berhasil ditambah!');
  }
  public function edit($id)
  {
    $anggota = DB::table('anggota')->where('id', $id)->first();
    return view('anggota.edit', compact('anggota'));
    // dd($anggota);
  }
  public function prosesEdit(Request $request, $id)
  {
    DB::table('anggota')->where('id', $id)->update([
      'id_anggota' => $request->id_anggota,
      'kode_anggota' => $request->kode_anggota,
      'nama_anggota' => $request->nama_anggota,
      'jk' => $request->jk,
      'jurusan_anggota' => $request->jurusan_anggota,
      'no_tlp' => $request->no_tlp,
      'alamat' => $request->alamat
    ]);
    return redirect('anggotas')->with('status', 'Data Anggota berhasil diubah!');
  }
  public function delete($id)
  {
    DB::table('anggota')->where('id', $id)->delete();
    return redirect('anggotas')->with('status', 'Data Anggota berhasil dihapus!');
  }
}

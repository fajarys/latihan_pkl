@extends('main')

@section('name', 'Dashboard')



@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Edit Data Anggota</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li class="active"><i class="fa fa-dashboard"></i></li>
              </ol>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')
  <div class="animated fadeIn">
    <div class="card">
      <div class="card-header">
        <div class="pull-left">
          <a href="{{ url('anggotas') }}" class="btn btn-secondary btn-sm"> <i class="fa fa-undo"></i> kembali</a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <form action="{{ url('anggotas/' . $anggota -> id) }}" method="post">
              @method('patch')
              @csrf
              <div class="form-group">
                <label>ID Anggota</label>
                <input type="text" name="id_anggota" id="" class="form-control" value="{{ ($anggota-> id_anggota) }}" autofocus required>
                <label>Kode Anggota</label>
                <input type="text" name="kode_anggota" id="" class="form-control" value="{{ ($anggota-> kode_anggota) }}" autofocus required>
                <label>Nama</label>
                <input type="text" name="nama_anggota" id="" value="{{ ($anggota-> nama_anggota) }}" class="form-control" autofocus required>
                <label>JK</label>
                <input type="text" name="jk" id="" value="{{ ($anggota-> jk) }}" class="form-control" autofocus required>
                <label>Jurusan</label>
                <input type="text" name="jurusan_anggota" id="" value="{{ ($anggota-> jurusan_anggota) }}" class="form-control" autofocus required>
                <label>Jurusan</label>
                <input type="text" name="no_tlp" id="" value="{{ ($anggota-> no_tlp) }}" class="form-control" autofocus required>
                <label>Alamat</label>
                <input type="text" name="alamat" id="" value="{{ ($anggota-> alamat) }}" class="form-control" autofocus required>
                <button type="submit" class="btn btn-success mt-3 ">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      
  </div>

</div>
    
@endsection
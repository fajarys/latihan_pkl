@extends('main')

@section('name', 'Dashboard')



@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Data Anggota</h1>
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
          <a href="{{ url('anggotas') }}" class="btn btn-secondary btn-sm"> <i class="fa fa-undo"></i>kembali</a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <form action="{{ url('anggotas') }}" method="post">
              @csrf
              <div class="form-group">
                <label>ID Anggota</label>
                <input type="text" name="id_anggota" id="" class="form-control" autofocus required>
                <label>Kode</label>
                <input type="text" name="kode_anggota" id="" class="form-control" autofocus required>
                <label>Nama</label>
                <input type="text" name="nama_anggota" id="" class="form-control" autofocus required>
                <label>JK</label>
                <input type="text" name="jk" id="" class="form-control" autofocus required>
                <label>jurusan</label>
                <input type="text" name="jurusan_anggota" id="" class="form-control" autofocus required>
                <label>No Telpon</label>
                <input type="text" name="no_tlp" id="" class="form-control" autofocus required>
                <label>Alamat</label>
                <input type="text" name="alamat" id="" class="form-control" autofocus required>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      
  </div>

</div>
    
@endsection
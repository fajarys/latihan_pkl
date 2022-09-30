@extends('main')

@section('name', 'Dashboard')



@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Edit Data Buku</h1>
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
          <a href="{{ url('bukus') }}" class="btn btn-secondary btn-sm"> <i class="fa fa-undo"></i> kembali</a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <form action="{{ url('bukus/' . $buku-> id_buku) }}" method="post">
              @method('patch')
              @csrf
              <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" id="" class="form-control" value="{{ ($buku->kode_buku) }}" autofocus required>
                <label>Judul</label>
                <input type="text" name="judul_buku" id="" value="{{ ($buku->judul_buku) }}" class="form-control" autofocus required>
                <label>Penulis</label>
                <input type="text" name="penulis_buku" id="" value="{{ ($buku->penulis_buku) }}" class="form-control" autofocus required>
                <label>Penerbit</label>
                <input type="text" name="penerbit_buku" id="" value="{{ ($buku->penerbit_buku) }}" class="form-control" autofocus required>
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="" value="{{ ($buku->tahun_terbit) }}" class="form-control" autofocus required>
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
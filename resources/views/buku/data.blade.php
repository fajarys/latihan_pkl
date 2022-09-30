@extends('main')

@section('name', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Data Buku</h1>
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
<div class="content mt-3">

  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif


  <div class="animated fadeIn">
    <div class="card">
      <div class="card-header">
        <div class="pull-left">
          <a href="{{ url('bukus/add') }}" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> tambah</a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $buku as $item)
            <tr>
              <td>{{ $loop-> iteration }}</td>
              <td>{{ $item -> kode_buku }}</td>
              <td>{{ $item -> judul_buku }}</td>
              <td>{{ $item -> penulis_buku }}</td>
              <td>{{ $item -> penerbit_buku}}</td>
              <td>{{ $item -> tahun_terbit }}</td>
              <td class="text-center">
                <a href="{{ url('bukus/edit/' . $item-> id_buku) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <form action="{{ url('bukus/' . $item-> id_buku) }}" class="d-inline" method="post" onsubmit="return confirm('Data ini akan dihapus')">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>

@endsection
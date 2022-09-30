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
          <a href="{{ url('anggotas/add') }}" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> tambah</a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Anggota</th>
              <th>Kode Anggota</th>
              <th>Nama</th>
              <th>JK</th>
              <th>Jurusan</th>
              <th>No Telpon</th>
              <th>Alamat</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $anggota as $item)
            <tr>
              <td>{{ $loop-> iteration }}</td>
              <td>{{ $item -> id_anggota }}</td>
              <td>{{ $item -> kode_anggota }}</td>
              <td>{{ $item -> nama_anggota }}</td>
              <td>{{ $item -> jk }}</td>
              <td>{{ $item -> jurusan_anggota}}</td>
              <td>{{ $item -> no_tlp }}</td>
              <td>{{ $item -> alamat }}</td>
              <td class="text-center">
                <a href="{{ url('anggotas/edit/' . $item-> id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <form action="{{ url('anggotas/' . $item-> id) }}" class="d-inline" method="post" onsubmit="return confirm('Data ini akan dihapus')">
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
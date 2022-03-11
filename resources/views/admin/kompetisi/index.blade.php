@extends('admin.templateadmin.index')
@section('page-content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Kompetisi</h3>
            </div>
            <!-- /.card-header -->
            @if(session()->has('hapus'))
            {{ session('hapus') }}
            @endif
            @if(session()->has('tambah'))
            {{ session('tambah') }}
            @endif
            @if(session()->has('edit'))
            {{ session('edit') }}
            @endif
            <div class="card-body">
                <a href="/daftarkompetisi/create" class="btn btn-primary mb-3">Create New Kompetisi</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kompetisi</th>
                  <th>Tanggal Kompetisi</th>
                  <th>Kuota peserta</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($kompetisi as $kmpts)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kmpts->nama_kompetisi }}</td>
                    <td>{{ $kmpts->tanggal_kompetisi}}</td>
                    <td>{{ $kmpts->kuota_peserta}}</td>
                    <td>
                        <a href="/daftarkompetisi/{{ $kmpts->id }}/edit" class="badge bg-warning"><i class="far fa-edit nav-icon"></i></a>
                         <form action="/daftarkompetisi/{{ $kmpts->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button  class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="far fa-circle nav-icon"></i></button>
                        </form>
                    </td>
                </tr>
                     @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Kompetisi</th>
                    <th>Tanggal Kompetisi</th>
                    <th>Kuota peserta</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div> 
        </div> 
      </div> 
    </div> 
</section>
@endsection
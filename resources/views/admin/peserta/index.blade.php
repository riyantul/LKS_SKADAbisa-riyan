@extends('admin.templateadmin.index')
@section('page-content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Semua User</h3>
            </div>
            <!-- /.card-header -->
            @if(session()->has('pesan'))
            {{ session('pesan') }}
            @endif
            <div class="card-body">
              <div class="card-header">
                <a href="/listuser/create" class="btn btn-primary mb-3">Create New User</a>
              <div class="card-tools">
<form action="/listuser">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
</form>
              </div>
            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peserta</th>
                  <th>Tanggal Lahir</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($peserta as $psrt)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $psrt->nama_peserta }}</td>
                    <td>{{ $psrt->tanggal_lahir }}</td>
                    <td>
                        <a href="/listuser/{{ $psrt->id }}/edit" class="badge bg-warning"><i class="far fa-edit nav-icon"></i></a>
                         <form action="/listuser/{{ $psrt->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button  class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="far fa-circle nav-icon"></i></button>
                        </form>
                    </td>
                </tr>
                     @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div> 
        </div> 
      </div> 
    </div> 
</section>
@endsection
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
                <a href="/listuser/create" class="btn btn-primary mb-3">Create New User</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($user as $usr)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->email }}</td>
                    <td>
                        <a href="/listuser/{{ $usr->id }}/edit" class="badge bg-warning"><i class="far fa-edit nav-icon"></i></a>
                         <form action="/listuser/{{ $usr->id }}" method="post" class="d-inline">
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
                    <th>Name</th>
                    <th>Email</th>
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
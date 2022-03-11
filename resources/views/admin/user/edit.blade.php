@extends('admin.templateadmin.index')
@section('page-content')
<section class="content">
    <div class="container-fluid">
  
             <!-- left column -->
             <div class="col-md-8">  
               <a href="/listuser"type="submit" class="btn btn-primary mb-3">Kembali</a>
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/listuser/{{ $user->id }}" method="post">
                @method('put')
                  @csrf
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Password" name="password" value="{{ $user->password }}" readonly>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
      
    </div> 
</section>
@endsection
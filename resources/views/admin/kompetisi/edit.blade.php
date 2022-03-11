@extends('admin.templateadmin.index')
@section('page-content')
<section class="content">
    <div class="container-fluid">
  
             <!-- left column -->
             <div class="col-md-8">  
               <a href="/daftarkompetisi"type="submit" class="btn btn-primary mb-3">Kembali</a>
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Edit Kompetisi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/daftarkompetisi/{{ $kompetisi->id }}" method="post">
                    @method('put')
                  @csrf
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Nama Kompetisi" name="nama_kompetisi" value="{{ $kompetisi->nama_kompetisi }}">
                    </div>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="Tanggal Kompetisi" name="tanggal_kompetisi" value="{{ $kompetisi->tanggal_kompetisi }}">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Jumlah Kuota" name="kuota_peserta" value="{{ $kompetisi->kuota_peserta }}">
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
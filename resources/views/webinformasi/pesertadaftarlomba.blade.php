@extends('templateinformasi.khusus')
@section('page-content-2')
            <div class="container">
                <div class="isi">
                    <div class="caption">
                        <h1>Daftar Lomba PT NAKIMOTO</h1>
                    </div>

                    <div class="box-daftar">

                        <div class="kotak">
                            <div class="image"><img src="{!! asset('img/logolomba.png') !!}" width="100%"></div>
                            <div class="text">
                                <h2>Progammer</h2>
                                <h4><a href="/pesertadaftarlomba">Learn More..</a></h4>
                            </div>
                        </div>
                        <div class="formulir">
                            <div class="h1">Daftar Disini</div>
                            <form action="/pesertadaftarlomba" method="post">
                            @csrf
                                <div class="input">
                                    <div class="form-group">
                                      <input type="text" name="nama_peserta" placeholder="Nama..">  
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir..">  
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="no_telp" placeholder="No Telepone..">  
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="alamat" placeholder="Alamat..">  
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="jenis_lomba" placeholder="Jenis Lomba..">  
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">Daftar</button>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
                

                    </div>
                </div>
            </div>
        
@endsection

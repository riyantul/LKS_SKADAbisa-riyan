@extends('templateinformasi.khusus')
@section('page-content-2')
            <div class="container">
                <div class="isi">
                    <div class="caption">
                        <h1>Daftar Lomba PT NAKIMOTO</h1>
                    </div>

                    <div class="box">
@foreach($lomba as $lmb)
                        <div class="kotak">
                            <div class="image"><img src="{!! asset('img/logolomba.png') !!}" width="100%"></div>
                            <div class="text">
                                <h2>{{ $lmb->nama_kompetisi }}</h2>
                                <h4><a href="/pesertadaftarlomba/{{ $lmb->id }}">Learn More..</a></h4>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </div>
        
@endsection

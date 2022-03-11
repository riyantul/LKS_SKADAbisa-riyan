@extends('templateinformasi.index')
@section('page-content')
<div class="oke">


<div class="login">
    @if(session()->has('pesan'))
    {{ session('pesan') }}
    @endif
    @if(session()->has('status'))
    {{ session('status') }}
    @endif
    <div class="label">
        LOGIN
    </div>
    <form action="/login" method="post">
        @csrf
        <div class="isi">
            <div class="group">
                <input type="text" name="email" placeholder="Email.." >
            </div>
            <div class="group">
                <input type="password" name="password" placeholder="password.." >
                <small>do you have account?<a href="/register">register</a></small>
            </div>
        </div>
        <div class="btn">
            <button type="submit">Log in</button>
        </div>
    </form>
</div></div>
@endsection
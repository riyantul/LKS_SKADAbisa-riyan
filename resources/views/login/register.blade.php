@extends('templateinformasi.index')
@section('page-content')
<div class="oke">


<div class="login">
    <div class="label">
        REGISTER
    </div>
    <form action="/register" method="post">
        @csrf
        <div class="isi">
            <div class="group">
                <input type="text" name="name" placeholder="Nama.." >
            </div>
            <div class="group">
                <input type="text" name="email" placeholder="Email.." >
            </div>
            <div class="group">
                <input type="password" name="password" placeholder="password.." >
                <small>do you have account?<a href="/login">login</a></small>
            </div>
        </div>
        <div class="btn">
            <button type="submit">Log in</button>
        </div>
    </form>
</div></div>
@endsection
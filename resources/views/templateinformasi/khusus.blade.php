<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT NAKONI</title>
    <link rel="stylesheet" href="{!! asset('webinformasi/style.css') !!}">
</head>
<body>

    <div class="content">
        <div class="container">
            <div class="navigasi">
                <div class="row">
                    <div class="logo"><img src="{!! asset('img/logoperusahaan.png') !!}" width="50px"></div>
                    <div class="menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/profil">Profil Perusahaan</a></li>
                            <li><a href="/lomba">Daftar Lomba</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/game">Game</a></li>
                            @auth
                                <li><button><a href="/logout">LogOut</a></button></li>
                            @else
                                <li><button><a href="/login">login</a></button></li>
                            @endauth
                            
                        </ul>
                    </div>
                </div>
            </div>
@yield('page-content')
        </div>
    </div>
@yield('page-content-2')

</body>
</html>
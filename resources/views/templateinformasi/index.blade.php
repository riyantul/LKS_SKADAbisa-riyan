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
                            <li><a href="">Profil Perusahaan</a></li>
                            <li><a href="">Daftar Lomba</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Game</a></li>
                            <li><button><a href="/login">login</a></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    @yield('page-content')
</div>
</body>
</html>
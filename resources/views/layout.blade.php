<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <div id="barra-nav">
        <img id="logo" src="./img/logo_is.png" alt="">
        <nav>
            <ul>
                <li class="li-nav"><a href="/"> Inicio</a> </li>
                <li class="li-nav"><a href="/misviajes"> Mis viajes</a> </li>
                <li class="li-nav"><a href="/mihistorial"> Historial</a> </li>
                <li class="li-nav"><a href="/micuenta"> Cuenta</a> </li>
                <li class="li-nav"><a href="/ayuda"> Ayuda</a> </li>
            </ul>
        </nav>

    </div>
    @yield('content')
</body>
</html>
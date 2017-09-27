<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     CSRF Token
    <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- ICONOS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <!-- Styles -->
<link href="{{asset('css/material-color.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/propio.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">




</head>

<body>

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title mdl-color-text--black"><b>Google </b> Keep</span>


            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation">
                <a href="" class="mdl-navigation__link"><i class="material-icons">refresh</i></a>
                <a href="" class="mdl-navigation__link"><i class="material-icons">view_stream</i></a>
                <a href="" class="mdl-navigation__link"><i class="material-icons">apps</i></a>
                <a href="" class="mdl-navigation__link"><i class="material-icons">notifications_none</i></a>

            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Notas</a>
            <a class="mdl-navigation__link" href="">Recordatorios</a>
            <hr color="#DDDDDD">
            <a class="mdl-navigation__link" href="">Crear Etiqueta</a>
            <hr color="#DDDDDD">
            <a class="mdl-navigation__link" href="">Archivo</a>
            <a class="mdl-navigation__link" href="">Papelera</a>
            <hr color="#DDDDDD">
            <a class="mdl-navigation__link" href="">Ajustes</a>
            <a class="mdl-navigation__link" href="">Enviar Comentarios</a>
            <a class="mdl-navigation__link" href="">Ayuda</a>
            <a class="mdl-navigation__link" href="">Descargas Aplicaciones</a>
            <a class="mdl-navigation__link" href="">Combinaciones de teclas</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
    </main>

    @yield('content')

</div>


<!-- Scripts -->

<script src="{{ asset('js/material.min.js') }}"></script>
</body>
</html>
